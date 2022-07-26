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
    #[Route(path: '/logout', name: 'logout')]
    public function logout()
    {
        return $this->redirectToRoute('login');
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/connexion', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils, ManagerRegistry $doctrine, Security $security): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
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
            'calendar' => $calendar,
        ]);
    }

}
