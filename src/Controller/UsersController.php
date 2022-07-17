<?php

namespace App\Controller;

use App\Entity\Country;
use App\Entity\UserMeta;
use App\Entity\Users;
use App\Form\UserMetaType;
use App\Form\UsersType;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
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
            'carousel' => true,
            'title' => 'Mon compte',
            'form' => $form->createView()
        ]);
    }



    #[Route('/mon-compte', name: 'dashboard')]
    public function dashboard(Request $request, ManagerRegistry $doctrine,  UserInterface $user, UserPasswordHasherInterface $passwordHasher,)
    {
        $identifier = $user->getUserIdentifier();
        $repository = $doctrine->getRepository(Users::class);
        $getUser = $repository->findOneBy(['email' => $identifier]);

        $dataUser = [
            'first_name' =>$getUser->getFirstName(),
            'last_name' =>$getUser->getLastName(),
            'email' =>$getUser->getEmail(),
            'society' =>$getUser->getSociety(),
            'birthday' =>$getUser->getBirthday(),
            'phone_number' =>$getUser->getPhoneNumber(),
            'address' =>$getUser->getAddress(),
            'compl_address' =>$getUser->getComplAddress(),
            'city' =>$getUser->getCity(),
            'country' => $getUser->getCountry()->getId(),
        ];
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
            'userdata' => $dataUser
        ]);
    }

    #[Route('/mon-compte/paiement', name: 'payment')]
    public function payment(Request $request, ManagerRegistry $doctrine, UserInterface $user)
    {
        $identifier = $user->getUserIdentifier();
        $repository = $doctrine->getRepository(Users::class);
        $user = $repository->findOneBy(['email' => $identifier]);

        $userMeta = new UserMeta();
        $form = $this->createForm(UserMetaType::class, $userMeta);
        $form->handleRequest($request);

        $repository = $doctrine->getRepository(UserMeta::class);
        $userMetaSearch = $repository->findOneBy(['user' => $user, 'field' => '_host_iban']);
        // var_dump($userMetaSearch[0]->getId());
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


        return $this->render('inc/pages/users/payment.html.twig', [
            'title' => 'Mes paiements',
            'form' => $form->createView(),
            'iban' => $userMetaSearch->getValue()
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


        $historical = $reservationRepository->historical($client_id, 0, 0, 0, 2, 10);
        

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

    #[Route('/mon-compte/historical/action', name: 'historical.action')]
    public function historicalAction()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $btnName = $data['btn_name'];
        $value = $data['value'];
        $output = '{"btn_name":"'.$btnName.'","value":"'.$value.'"}';
        if ($btnName == "btn-refuse" || $btnName == "btn-valid") {
            return new JsonResponse($output);
        }
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
        $character = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'A', 'b', 'B', 'c', 'C', '?', '!', '-', '_','d', 'D', 'e', 'E', 'f', 'F', 'g', 'h', 'i', 'j', 'k'];
        $tableSize = count($character);
        $element = "";
        for ($i=0; $i < $limit; $i++) { 
            $element .= $character[rand(0, $tableSize - 1)];
        }
        return $element;
    }
}
