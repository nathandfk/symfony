<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Country;
use App\Entity\Dwelling;
use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\UserMeta;
use App\Entity\Users;
use App\Form\PasswordType;
use App\Form\ResetType;
use App\Form\UserMetaType;
use App\Form\UsersType;
use App\Repository\ReservationRepository;
use App\Repository\UsersRepository;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Mailer\MailerInterface;

#[AsController]
class UsersController extends AbstractController
{
    
    // Requête API Platform pour l'application mobile
    public function __invoke(Request $request, UsersRepository $usersRepository)
    {
        return $usersRepository->findByEmail($request->get('email'), $request->get('profil'), $request->get('salt'));
    }

    // Création de route et Incription
    #[Route('/inscription', name: 'register')]
    public function register(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher, Security $security, MailerInterface $mailer): Response
    {
        $security = $security->getUser();
        if ($security) {
            return $this->redirectToRoute('app_index');
        }



        // Création d'un formaulaire
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        // Vérifions si les données renseignées sont correctes
        if ($form->isSubmitted() && $form->isValid()) {
            $repository = $doctrine->getRepository(Country::class);
            $country = $repository->findOneBy(["id" => $user->getCountry()]);
            if ($country && $_POST['register-opt-in'] == "on") {
                $activate = $this->generator(24);
                $em = $doctrine->getManager();
                $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
                $user->setActivationKey($activate);
                $user->setCountry($country);
                $em->persist($user);
                $em->flush();

                $postsRep = $doctrine->getRepository(Posts::class);
                $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                $firstName = $user->getFirstName();
                $emailUser = $user->getEmail();
                // Envoie d'email de confirmation avec un lien d'activation
                // Lien expirant sous 24h
                $link = "https://f2i-dev14-nd-hh-mr.nathandfk.fr/membre/compte?key=".$activate."&email=".$user->getEmail();
                if ($posts) {
                    foreach ($posts as $post) {
                        $email = (new Email())
                            ->from("AtypikHouse <".$post->getDescription().">")
                            ->to($emailUser)
                            ->subject('Inscription réussie')
                            ->text('Inscription utilisateur sur le site de AtypikHouse')
                            ->html("
                            <div>
                            <p>Bonjour <b>$firstName</b></p>
                            <p>Vous êtes bien inscrit sur notre site internet</p>
                            <p>Veuillez cliquer sur le lien suivant pour confirmer qu'il s'agit bien de vous</p>
                            <p><a href='$link'>$link</a></p>
                            <p>Ce lien expirera sous une période de 24 heures.</p>
                            <p>Nous sommes très ravis de vous compter parmi nous, sans plus attendre faites vos réservations partout en Europe.</p>
                            <p>Profitez pleinement de notre site internet et de tout ce qu'il vous offre.</p>
                            <p>L'équipe AtypikHouse.</p>
                            <div style='text-align: center;'>
                            <img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                            </div>
                            ");

                        $mailer->send($email);
                    }
                }
                $this->addFlash("success", "Inscription réussie");
                return $this->redirectToRoute('app_index');
            }
        } else if($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash("error", "Inscription échouée, veuillez recommencer");
        }
        return $this->render('inc/pages/users/register.html.twig', [
            'carousel' => false,
            'title' => 'Mon compte',
            'calendar' => $calendar,
            'form' => $form->createView()
        ]);
    }

    // Création de route et activation d'un compte utilisateur à travers le lien qu'il aura reçu
    #[Route('/membre/compte', name: 'activate')]
    public function activate(ManagerRegistry $doctrine, Security $security)
    {
        $security = $security->getUser();
        if (!isset($_GET['key']) || empty($_GET['key']) || !isset($_GET['email']) || empty($_GET['email'])) {
            $this->addFlash("error", "Ce lien est incorrect");
            return $this->redirectToRoute('app_index');
        } else {
            $repository = $doctrine->getRepository(Users::class);
            $exit = $repository->findOneBy(["email" => $_GET['email'], "activationKey" => $_GET['key']]);
            if ($exit) {
                $em = $doctrine->getManager();
                $exit->setStatut(true);
                $exit->setUpdatedAt(new DateTimeImmutable('now', new DateTimeZone('Europe/Paris')));
                $em->persist($exit);
                $em->flush();
                $this->addFlash("success", "Votre compte a été activé avec succès");
                return $this->redirectToRoute('app_index');
            } else {
                $this->addFlash("eroor", "Ce lien est incorrect");
                return $this->redirectToRoute('app_index');
            }
        }

    }

    // Réinitialisation d'un mot de passe
    #[Route('/membre/reinit', name: 'forgot')]
    public function forgot(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher, Security $security, MailerInterface $mailer): Response
    {
        $security = $security->getUser();
        if ($security) {
            return $this->redirectToRoute('app_index');
        }
        $users = new Users();
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        
        $repository = $doctrine->getRepository(Users::class);
        $response = [
            'title' => 'Mot de passe perdu',
            'form' => '',
            'calendar' => $calendar,
        ];
        $em = $doctrine->getManager();
        // Vérifions si tous nos get sont présents et corrects
        // Si correct affichons un formulaire de réinitialisation
        if (isset($_GET['key']) && !empty($_GET['key']) && isset($_GET['email']) && !empty($_GET['email'])) {

            // Vérifions si les données des get sont correctes
            $exit = $repository->findOneBy(["email" => $_GET['email'], "activationKey" => $_GET['key']]);
            if (!$exit) {
                $this->addFlash("error", "Votre lien est incorrect");
                return $this->redirectToRoute('forgot');
            }
            // S'ils sont correctes créons un formulaire de réinitialisation avec mot de passe
            $form = $this->createForm(PasswordType::class, $users);
            $form->handleRequest($request);
            $response['form'] = $form->createView();
            if ($form->isSubmitted() && $form->get('password')->isValid()) {
                $user = $repository->findOneBy(["email" => $_GET['email']]);
                if ($user->getActivationKey() == $_GET['key']) {
                    // Modifions le mot de passe et redirigeons l'utilisateur vers la page de login
                    if ($user->getStatut() == false) {
                        $user->setStatut(true);
                    }
                    $user->setPassword($passwordHasher->hashPassword($user, $users->getPassword()));
                    $em->persist($user);
                    $em->flush();
                    $this->addFlash("success", "Mot de passe modifié avec succès");
                    return $this->redirectToRoute('login');
                } else {
                    $this->addFlash("success", "Votre lien n'est pas correct, veuillez recommencer");
                    return $this->redirectToRoute('forgot');
                }
            }

        // Si non affichons un formulaire de demande de réinitialisation avec tout juste un input email
        } else {
            if (isset($_POST['btn-reset']) && isset($_POST['email']) && !empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                
                    $user = $repository->findOneBy(["email" => $_POST['email']]);
                    if ($user) {
                        $activate = $this->generator(24);
                        $user->setActivationKey($activate);
                        $em->persist($user);
                        $em->flush();

                        $postsRep = $doctrine->getRepository(Posts::class);
                        $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                        $firstName = $user->getFirstName();
                        $emailUser = $user->getEmail();
                        // Ensuite envoyons lui un email de réinitialisation
                        $link = "https://f2i-dev14-nd-hh-mr.nathandfk.fr/membre/reinit?key=".$activate."&email=".$user->getEmail();
                        if ($posts) {
                            foreach ($posts as $post) {
                                $email = (new Email())
                                    ->from($post->getDescription())
                                    ->to($emailUser)
                                    ->subject("Mot de passe ?")
                                    ->text('Activez votre compte')
                                    ->html("
                                    <div>
                                    <p>Bonjour <b>$firstName</b></p>
                                    <p>Vous avez demandé à réinitialiser votre mot de passe car vous l'avez sans doute oublié.</p>
                                    <p>Veuillez cliquer sur le lien ci-dessous pour réinitialiser votre mot de passe</p>
                                    <p><a href='$link'>$link</a></p>
                                    <p>Nous sommes très ravis de vous compter parmi nous.</p>
                                    <p>L'équipe AtypikHouse.</p>
                                    <div style='text-align: center;'>
                                    <img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                                    </div>
                                    ");
        
                                $mailer->send($email);
                            }
                        }
                        $this->addFlash("success", "Nous venons de vous envoyer un mail");
                        return $this->redirectToRoute('forgot');
                    } else {
                        $this->addFlash("error", "Cet utilisateur n'est pas inscrit sur notre site");
                        return $this->redirectToRoute('forgot');
                    }
                } else {
                    $this->addFlash("error", "Votre mail n'est pas valide");
                    return $this->redirectToRoute('forgot');
                }
            } else if(isset($_POST['btn-reset']) && (!isset($_POST['email']) || empty($_POST['email']))) {
                $this->addFlash("error", "Une erreur est survenue, veuillez recommencer");
            }
        }
        return $this->render('inc/pages/users/forgot-password.html.twig', $response);
    }



    // Modification du profil utilisateur
    #[Route('/mon-compte', name: 'dashboard')]
    public function dashboard(Request $request, ManagerRegistry $doctrine,  UserInterface $user, UserPasswordHasherInterface $passwordHasher,)
    {
        $identifier = $user->getUserIdentifier();
        $repository = $doctrine->getRepository(Users::class);
        $getUser = $repository->findOneBy(['email' => $identifier]);
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        
        // Si l'utilisateur souhaite conserver l'ancien mdp
        if ($form->isSubmitted() 
                && $form->get('firstName')->isValid() 
                && $form->get('lastName')->isValid()
                && $form->get('phoneNumber')->isValid()
                && $form->get('address')->isValid()
                && $form->get('complAddress')->isValid()
                && $form->get('city')->isValid()
                && $form->get('country')->isValid()
                && $form->get('password')->isEmpty()
                ) {
                    $countriesRep = $doctrine->getRepository(Country::class);
                    $countries = $countriesRep->find($user->getCountry());
                    if ($countries) {
                        $em = $doctrine->getManager();
                        $getUser->setLastName($user->getLastName());
                        $getUser->setFirstName($user->getFirstName());
                        $getUser->setPhoneNumber($user->getPhoneNumber());
                        $getUser->setAddress($user->getAddress());
                        $getUser->setComplAddress($user->getComplAddress());
                        $getUser->setCity($user->getCity());
                        $getUser->setSociety($user->getSociety());
                        $getUser->setBirthday($user->getBirthday());
                        $getUser->setCountry($countries);
                        $getUser->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                        $em->persist($getUser);
                        $em->flush();
                        $this->addFlash("success", "Mise à jour de votre profil réussie");
                    }
                    return $this->redirectToRoute('dashboard');
        
        // Si l'utilisateur souhaite modifier son mdp
        } else if ($form->isSubmitted()
        && $form->get('firstName')->isValid() 
        && $form->get('lastName')->isValid()
        && $form->get('phoneNumber')->isValid()
        && $form->get('address')->isValid()
        && $form->get('complAddress')->isValid()
        && $form->get('city')->isValid()
        && $form->get('country')->isValid()
        && $form->get('password')->isValid()) {
                $em = $doctrine->getManager();
                $getUser->setLastName($user->getLastName());
                $getUser->setFirstName($user->getFirstName());
                $getUser->setPhoneNumber($user->getPhoneNumber());
                $getUser->setAddress($user->getAddress());
                $getUser->setComplAddress($user->getComplAddress());
                $getUser->setCity($user->getCity());
                $getUser->setSociety($user->getSociety());
                $getUser->setBirthday($user->getBirthday());
                $getUser->setCountry($user->getCountry());
                $getUser->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                $password = is_null($user->getPassword()) ? $getUser->getCountry() : $passwordHasher->hashPassword($user, $user->getPassword());
                $getUser->setPassword($password);
                $em->persist($getUser);
                $em->flush();
                $this->addFlash("success", "Mise à jour de votre profil réussie, votre mot de passe a également été modifié");
                return $this->redirectToRoute('dashboard');
        }
        return $this->render('inc/pages/users/dashboard.html.twig', [
            'carousel' => true,
            'title' => 'Mon compte',
            'form' => $form->createView(),
            'userdata' => $getUser,
            'calendar' => $calendar
        ]);
    }


    // Gestion des paiements
    // Insertion de l'IBAN
    // Validattion et traitement des paiements par l'admin pour l'hôte
    #[Route('/mon-compte/paiement', name: 'payment')]
    public function payment(Security $security, Request $request, ManagerRegistry $doctrine, UserInterface $user, ReservationRepository $reservRep, PaginatorInterface $paginator)
    {
        $auth = $security->getUser();
        $identifier = $user->getUserIdentifier();
        $repository = $doctrine->getRepository(Users::class);
        $user = $repository->findOneBy(['email' => $identifier]);

        $userMeta = new UserMeta();
        $form = $this->createForm(UserMetaType::class, $userMeta);
        $form->handleRequest($request);
        $iban = [];
        $repository = $doctrine->getRepository(UserMeta::class);
        $userMetaSearch = $repository->findOneBy(['user' => $user, 'field' => '_host_iban']);
        if ($userMetaSearch) {
            $iban = $userMetaSearch->getValue();
        }

        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        $historical = $reservRep->historical(true, null, false, null, null, false, true);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            if ($userMetaSearch) {
                $userM = $em->getRepository(UserMeta::class)->find($userMetaSearch->getId());
    
                if (!$userM) {
                    throw $this->createNotFoundException(
                        'Aucun IBAN trouvé avec cet id '.$userMetaSearch->getId()
                    );
                }
                $userM->setValue(strtoupper($userMeta->getValue()));
            } else {
                $userMeta->setUser($user);
                $userMeta->setField('_host_iban');
                $userMeta->setValue(strtoupper($userMeta->getValue()));
                $em->persist($userMeta);
                $type = "success";
                $message = "Insertion de l'IBAN réussie";
            }
            $em->flush();
            $this->addFlash("success", "Insertion de l'IBAN réussie");
            return $this->redirectToRoute('payment');
        }
        if ($auth) {
            if (isset($_POST['payment_made'])) {
                if (in_array('ROLE_ADMIN', $auth->getRoles())) {
                    $id = $_POST['payment_dwelling_id'];
                    $em = $doctrine->getManager();
                    $reservRep = $doctrine->getRepository(Reservation::class);
                    $reservation = $reservRep->findOneBy(['id' => $id]);

                    $userRep = $doctrine->getRepository(Users::class);
                    $user = $userRep->findOneBy(['id' => $reservation->getUser()->getId()]);

                    if ($user) {
                        $userMetaRep = $doctrine->getRepository(UserMeta::class);
                        $userMeta = $userMetaRep->findBy(['user' => $user->getId(), "field" => '_host_iban']);
                        foreach ($userMeta as $meta) {
                            if ($meta) {
                                $reservMetaRep = $doctrine->getRepository(ReservationMeta::class);
                                $reservationMeta = $reservMetaRep->findBy(['reservation' => $id]);
                                $date = new \DateTimeImmutable('now', new DateTimeZone('Europe/Paris'));
                                foreach ($reservationMeta as $key) {
                                    $em = $doctrine->getManager();
                                    switch ($key->getField()) {
                                        case '_payment_iban':
                                            $key->setValue($meta->getValue());
                                            break;
                                        case '_payment_date':
                                            $key->setValue($date->format('d-m-Y H:i:s'));
                                            break;
                                        case '_payment_statut':
                                            $key->setValue('PAYMENT');
                                            break;
                                    }
                                    $em->persist($key);
                                    $em->flush();
                                }
                                $this->addFlash('success', 'Les modifications ont bien été appliquées');
                                return $this->redirectToRoute('payment');
                            }
                        }
                    } else {
                        $this->addFlash('success', "Vous n'avez pas les droits nécessaires pour exécuter cette action");
                        return $this->redirectToRoute('payment');
                    }
                }
            }
        }

        $historical = $paginator->paginate(
            $historical,
            $request->query->getInt('page', 1),
            2);
        return $this->render('inc/pages/users/payment.html.twig', [
            'title' => 'Mes paiements',
            'form' => $form->createView(),
            'iban' => $iban,
            'historical' => $historical,
            'message' => '',
            'calendar' => $calendar,
        ]);
    }


    // Création d'une route et d'une page historique
    #[Route('/mon-compte/historical', name: 'historical')]
    public function historical(Request $request, Security $security, ManagerRegistry $doctrine, ReservationRepository $reservationRepository)
    {

        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        $security = $security->getUser();
        $getEmailUser = $security->getUserIdentifier();

        $getRoleUser = $security->getRoles();

        $repository = $doctrine->getRepository(Users::class);
        $getUser = $repository->findOneBy(['email' => $getEmailUser]);
        $client_id = $getUser->getId();

        $firstDate = "2022-05-22 18:43:45";
        $zone = new \DateTimeZone('Europe/Paris');
        $seconDate = new DateTimeImmutable('now', $zone);
        $datt = strtotime($seconDate->format('Y-m-d H:i:s'))-strtotime($firstDate);

        
        return $this->render('inc/pages/users/reservation.html.twig', [
            'carousel' => true,
            'title' => 'Historique',
            "calendar" => $calendar,
        ]);
    }


    // Création d'une route
    // Retourne des paramètres dans la page message
    #[Route('/mon-compte/message', name: 'message')]
    public function message(Request $request, Security $security)
    {   
        
        $security = $security->getUser();
        if (!$security) {
            return $this->redirectToRoute('app_index');
        }

        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        $user = new Users();
        $userData = $security->getUserIdentifier();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);
        return $this->render('inc/pages/users/message.html.twig', [
            'carousel' => true,
            'title' => 'Messagerie',
            'form' => $form->createView(),
            'calendar' => $calendar,
        ]);
    }

    // Générateur de chaine de caractères
    public function generator(int $limit = 8, $remove = []){
        $character = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'A', 'b', 'B', 'c', 'C', '$', '^', '-', '_','d', 'D', 'e', 'E', 'f', 'F', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $tableSize = count($character);
        $element = "";
        for ($i=0; $i < $limit; $i++) { 
            $element .= $character[rand(0, $tableSize - 1)];
        }
        return $element;
    }
}
