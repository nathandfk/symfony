<?php

namespace App\Controller;

use App\Entity\Country;
use App\Entity\Dwelling;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\UserMeta;
use App\Entity\Users;
use App\Form\PasswordType;
use App\Form\ResetType;
use App\Form\UserMetaType;
use App\Form\UsersType;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Mailer\MailerInterface;

class UsersController extends AbstractController
{
    #[Route('/users/register', name: 'register')]
    public function register(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher, Security $security): Response
    {
        // MailerInterface $mailer
        $security = $security->getUser();
        if ($security) {
            return $this->redirectToRoute('app_index');
        }

        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repository = $doctrine->getRepository(Country::class);
            $country = $repository->findOneBy(["id" => $user->getCountry()]);
            if ($country && $_POST['register-opt-in'] == "on") {
                $activate = $this->generator(24);
                $em = $doctrine->getManager();
                $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
                $user->setActivationKey($activate);
                $em->persist($user);
                $em->flush();
                // $email = (new Email())
                //     ->from('hello@example.com')
                //     ->to('you@example.com')
                //     //->cc('cc@example.com')
                //     //->bcc('bcc@example.com')
                //     //->replyTo('fabien@example.com')
                //     //->priority(Email::PRIORITY_HIGH)
                //     ->subject('Time for Symfony Mailer!')
                //     ->text('Sending emails is fun again!')
                //     ->html('<p>See Twig integration for better HTML integration!</p>');

                // $mailer->send($email);
                $this->addFlash("success", "Inscription réussie");
                return $this->redirectToRoute('app_index');
            }
        } else if($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash("error", "Inscription échouée, veuillez recommencer");
        }
        return $this->render('inc/pages/users/register.html.twig', [
            'carousel' => false,
            'title' => 'Mon compte',
            'form' => $form->createView()
        ]);
    }



    #[Route('/users/forgot', name: 'forgot')]
    public function forgot(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher, Security $security): Response
    {
        $security = $security->getUser();
        if ($security) {
            return $this->redirectToRoute('app_index');
        }
        $users = new Users();
        $repository = $doctrine->getRepository(Users::class);
        $response = [
            'title' => 'Mot de passe perdu'
        ];
        $em = $doctrine->getManager();
        if (!isset($_GET['key']) || empty($_GET['key'])) {

            if (isset($_POST['btn-reset']) && isset($_POST['email']) && !empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                
                    $user = $repository->findOneBy(["email" => $_POST['email']]);
                    if ($user) {
                        $user->setActivationKey($this->generator(24));
                        $em->persist($user);
                        $em->flush();
                        $this->addFlash("success", "Nous venons de vous envoyer un lien sur votre boîte mail");
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
        } else if (isset($_GET['key']) && !empty($_GET['key']) && isset($_GET['email']) && !empty($_GET['email'])) {
            
            $form = $this->createForm(PasswordType::class, $users);
            $form->handleRequest($request);
            $response = [
                'title' => 'Mot de passe perdu',
                'form' => $form->createView()
            ];
            if ($form->isSubmitted() && $form->get('password')->isValid()) {
                $user = $repository->findOneBy(["email" => $_GET['email']]);
                if ($user->getActivationKey() == $_GET['key']) {
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
        }
        return $this->render('inc/pages/users/forgot-password.html.twig', $response);
    }



    #[Route('/mon-compte', name: 'dashboard')]
    public function dashboard(Request $request, ManagerRegistry $doctrine,  UserInterface $user, UserPasswordHasherInterface $passwordHasher,)
    {
        $identifier = $user->getUserIdentifier();
        $repository = $doctrine->getRepository(Users::class);
        $getUser = $repository->findOneBy(['email' => $identifier]);
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);
        
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
                    $em->persist($getUser);
                    $em->flush();
                    $this->addFlash("success", "Mise à jour de votre profil réussie");
                    return $this->redirectToRoute('dashboard');
        
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
            'userdata' => $getUser
        ]);
    }

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
            'message' => ''
        ]);
    }

    #[Route('/mon-compte/historical', name: 'historical')]
    public function historical(Request $request, Security $security, ManagerRegistry $doctrine, ReservationRepository $reservationRepository)
    {
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
        // if ($getRoleUser[1] == "ROLE_HOST") {
        //     $repDwel = $doctrine->getRepository(Dwelling::class);
        //     $getDwelling = $repDwel->findBy(['user_id' => $getUserId]);
        //     foreach ($getDwelling as $oneByOne) {
        //         var_dump($oneByOne);
        //     }
        //     $data = $reservationRepository->showDataReservation("*", "WHERE dwelling_id=".$getDwellingIdHost);
        // }
        // $data = $reservationRepository->showDataReservation("*", "WHERE user_id=".$getUserId);
        // var_dump($data);


        
        return $this->render('inc/pages/users/reservation.html.twig', [
            'carousel' => true,
            'title' => 'Mon compte',
        ]);
    }


    #[Route('/mon-compte/message', name: 'message')]
    public function message(Request $request, Security $security)
    {   
        
        $security = $security->getUser();
        if (!$security) {
            return $this->redirectToRoute('app_index');
        }
        $user = new Users();
        $userData = $security->getUserIdentifier();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);
        return $this->render('inc/pages/users/message.html.twig', [
            'carousel' => true,
            'title' => 'Mon compte',
            'form' => $form->createView()
        ]);
    }

    public function generator(int $limit = 8, $remove = []){
        $character = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'A', 'b', 'B', 'c', 'C', '?', '^', '-', '_','d', 'D', 'e', 'E', 'f', 'F', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $tableSize = count($character);
        $element = "";
        for ($i=0; $i < $limit; $i++) { 
            $element .= $character[rand(0, $tableSize - 1)];
        }
        return $element;
    }
}
