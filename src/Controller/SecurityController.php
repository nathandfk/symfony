<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Country;
use App\Entity\User;
use App\Entity\Users;
use App\Form\UsersType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    // #[Route(path: '/login', name: 'app_login')]
    // public function index(Request $request, ManagerRegistry $doctrine, AuthenticationUtils $authenticationUtils, Session $session): Response
    // {
    //     // if ($this->getUser()) {
    //     //     return $this->redirectToRoute('target_path');
    //     // }
    //     $user = new Users();
    //     $form = $this->createForm(UsersType::class, $user);
    //     $form->handleRequest($request);
    //     // get the login error if there is one
    //     $error = $authenticationUtils->getLastAuthenticationError();
    //     // last username entered by the user 
    //     $lastUsername = $authenticationUtils->getLastUsername();

    //     $return = ['last_username' => $lastUsername,
    //     'carousel' => true,
    //     'title' => 'Mon compte',
    //     'form' => $form->createView(), 
    //     'error' => $error];

    //     // if($session->has('message'))
    //     // {
    //     //         $message = $session->get('message');
    //     //         $session->remove('message'); //on vide la variable message dans la session
    //     //         $return['message'] = $message; //on ajoute à l'array de paramètres notre message
    //     // }

    //     return $this->render('inc/pages/users/index.html.twig', $return);
    // }

    #[Route(path: '/logout', name: 'logout')]
    public function logout()
    {
        return $this->redirectToRoute('login');
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/users/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils, ManagerRegistry $doctrine, Security $security): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }
        $user = $security->getUser();
        if ($user) {
            $email = $user->getUserIdentifier();
            $repository = $doctrine->getRepository(Users::class);
            $user = $repository->findOneBy(["email" => $email]);
            if ($user->getStatut() == TRUE) {
                $this->addFlash('success', 'Connexion établie');
                return $this->redirectToRoute('app_index');
            }
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render('inc/pages/users/login.html.twig', [
            'carousel' => true,
            'title' => 'Mon compte',
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

}
