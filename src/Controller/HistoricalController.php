<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

class HistoricalController extends AbstractController
{
    #[Route('/mon-compte/historical/host', name: 'compte_historical_host')]
    public function host(ManagerRegistry $doctrine, ReservationRepository $reservations, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $security = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($security) {
            $roles = $security->getRoles();
            if (in_array("ROLE_HOST", $roles)) {
                $userHost = $security->getUserIdentifier();
                $rep = $doctrine->getRepository(Users::class);
                $user = $rep->findOneBy(['email'=>$userHost]);
                $reservations = $reservations->historical(false, 0, true, $user->getId());
                if ($reservations) {
                    $response = ['historical' => $reservations, 'message' => ""];
                } else {
                    $response = ['historical' => $reservations, 'message' => "Votre historique est vide"];
                }
            } else {
                $response = ['historical' => '', 'message' => "Vous n'avez pas un rôle d'hôte"];
            }
        } else {
            $response = ['historical' => '', 'message' => "Vous ne vous êtes pas authentifier"];
        }
        return $this->render('inc/modules/historical/historical-host.html.twig', $response);
    }



    #[Route('/mon-compte/historical/client', name: 'compte_historical_client')]
    public function client(ManagerRegistry $doctrine, ReservationRepository $reservations, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $security = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($security) {
            $userHost = $security->getUserIdentifier();
            $rep = $doctrine->getRepository(Users::class);
            $user = $rep->findOneBy(['email'=>$userHost]);
            $reservations = $reservations->historical(true, $user->getId());
            if ($reservations) {
                $response = ['historical' => $reservations, 'message' => ""];
            } else {
                $response = ['historical' => $reservations, 'message' => "Votre historique est vide"];
            }

        } else {
            $response = ['historical' => '', 'message' => "Vous ne vous êtes pas authentifier"];
        }
        return $this->render('inc/modules/historical/historical-client.html.twig', $response);
    }

    #[Route('/mon-compte/historical/admin', name: 'compte_historical_admin')]
    public function admin(ManagerRegistry $doctrine, ReservationRepository $reservations, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $security = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($security) {
            $roles = $security->getRoles();
            if (in_array("ROLE_ADMIN", $roles)) {
                $userHost = $security->getUserIdentifier();
                $rep = $doctrine->getRepository(Users::class);
                $user = $rep->findOneBy(['email'=>$userHost]);
                $reservations = $reservations->historical(true, 0, false, 0, 0, true);
                if ($reservations) {
                    $response = ['historical' => $reservations, 'message' => ""];
                } else {
                    $response = ['historical' => $reservations, 'message' => "Votre historique est vide"];
                }
            } else {
                $response = ['historical' => '', 'message' => "Vous n'avez pas un rôle d'administrateur ou de modérateur du site"];
            }
        } else {
            $response = ['historical' => '', 'message' => "Vous ne vous êtes pas authentifier"];
        }
        return $this->render('inc/modules/historical/historical-host.html.twig', $response);
    }

}
