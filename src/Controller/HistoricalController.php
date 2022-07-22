<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use App\Repository\UsersRepository;
use DateTimeImmutable;
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
                $reservations = $reservations->historical(false, null, true, $user->getId(), null, true);
                $reservations = $paginator->paginate(
                    $reservations,
                    $request->query->getInt('page', 1),
                    2);
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
            $reservations = $paginator->paginate(
                $reservations,
                $request->query->getInt('page', 1),
                2);
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


    #[Route('/mon-compte/historical/action', name: 'historical.action')]
    public function historicalAction(ManagerRegistry $doctrine, Security $security)
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $btn = $data['btn'];
        $id = $data['id'];
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $auth = $security->getUser();
        if ($auth) {
            $reservRep = $doctrine->getRepository(Reservation::class);
            $reservation = $reservRep->findOneBy(['id' => $id]);

            $userRep = $doctrine->getRepository(Users::class);
            $user = $userRep->findOneBy(['email'=>$auth->getUserIdentifier()]);

            $dwellingRep = $doctrine->getRepository(Dwelling::class);
            $dwelling = $dwellingRep->findOneBy(['id'=>$reservation->getDwelling()->getId()]);

            $em = $doctrine->getManager();
            $reservationMetaRep = $doctrine->getRepository(ReservationMeta::class);

            if ($reservation) {
                $reservationMeta = $reservationMetaRep->findOneBy(["reservation" => $reservation->getId(), "field" => "_payment_intent"]);
                if ($btn == "annuled") {
                    if ($reservation->getStatut() == 'RESERVED' || $reservation->getStatut() == 'CONFIRMED' || $reservation->getStatut() == 'UNAVAILABLE') {
                        if ($reservation->getUser()->getId() == $user->getId()) {
                            $zone = new \DateTimeZone('Europe/Paris');
                            $toDay = new DateTimeImmutable('now', $zone);
                            $time = strtotime($toDay->format('Y-m-d')) - strtotime($reservation->getStartDate()->format('Y-m-d'));
                            if ($time < 0) {
                                if ($reservationMeta) {
                                    $this->stripeRefunds($reservationMeta->getValue());
                                    $reservation->setStatut('ANNULED');
                                    $em->persist($reservation);
                                    $em->flush();
                                    $output = '{"response":"success", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-check"}';
                                } else {
                                    $output = '{"response":"error", "message":"Une erreur est survenue, veuillez recommencer ou contactez l\'administrateur", "icon":"fas fa-exclamation"}';
                                }
                            } else {
                                $output = '{"response":"error", "message":"Cette réservation n\'est plus modifiable, la date d\'arrivée est aujourd\'hui", "icon":"fas fa-exclamation"}';
                            }
                        }
                    }
                } else if($btn == "annuled_by_host"){
                    if ($reservation->getStatut() == 'RESERVED' || $reservation->getStatut() == 'CONFIRMED' || $reservation->getStatut() == 'UNAVAILABLE') {
                        if ($dwelling->getUser()->getId() == $user->getId()) {
                            $zone = new \DateTimeZone('Europe/Paris');
                            $toDay = new DateTimeImmutable('now', $zone);
                            $time = strtotime($toDay->format('Y-m-d')) - strtotime($reservation->getStartDate()->format('Y-m-d'));
                            if ($time < 0) {
                                if ($reservation->getStatut() == 'UNAVAILABLE') {
                                    $reservation->setStatut('DISPONIBLE');
                                    $em->persist($reservation);
                                    $em->flush();
                                    $output = '{"response":"success", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-check"}';
                                } else {
                                    if ($reservationMeta) {
                                        $reservation->setStatut('ANNULED_BY_HOST');
                                        $em->persist($reservation);
                                        $em->flush();
                                        $output = '{"response":"success", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-check"}';
                                    } else {
                                        $output = '{"response":"error", "message":"Une erreur est survenue, veuillez recommencer ou contactez l\'administrateur", "icon":"fas fa-exclamation"}';
                                    }
                                }
                            } else {
                                $output = '{"response":"error", "message":"Cette réservation n\'est plus modifiable, la date d\'arrivée est aujourd\'hui", "icon":"fas fa-exclamation"}';
                            }
                        }
                    }
                } else if($btn == "confirmed"){
                    if ($reservation->getStatut() == 'RESERVED' || $reservation->getStatut() == 'UNAVAILABLE') {
                        if ($dwelling->getUser()->getId() == $user->getId()) {
                            $zone = new \DateTimeZone('Europe/Paris');
                            $toDay = new DateTimeImmutable('now', $zone);
                            $time = strtotime($toDay->format('Y-m-d')) - strtotime($reservation->getStartDate()->format('Y-m-d'));
                            if ($time < 0) {
                                $reservation->setStatut('CONFIRMED');
                                $em->persist($reservation);
                                $em->flush();
                                $output = '{"response":"success", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-check"}';
                            } else {
                                $output = '{"response":"success", "message":"Cette réservation n\'est plus modifiable, la date d\'arrivée est aujourd\'hui", "icon":"fas fa-exclamation"}';
                            }
                        }
                    }
                } else {
                    $output = '{"response":"error", "message":"Une erreur est survenue, merci de recommencer", "icon":"fas fa-exclamation"}';
                }
            } else {
                $output = '{"response":"error", "message":"Une erreur est survenue, merci de recommencer", "icon":"fas fa-exclamation"}';
            }
            
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }

    public function stripeRefunds(string $payentIntent){
        $stripe = new \Stripe\StripeClient("sk_test_51GD6saG2KF2h4mZbuzmOm3C372M2rcRQYd3jsLcLsKxEMh6oEwwnsPHtfm62OvpeUwYikn3ha0Ja4gkoz8MHlv8600HSvfcksV");
        $stripe->refunds->create(['payment_intent' => $payentIntent]);
    }

    
    // #[Route('/mon-compte/historical/admin', name: 'compte_historical_admin')]
    // public function admin(ManagerRegistry $doctrine, ReservationRepository $reservations, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    // {
    //     $security = $security->getUser();
    //     $data = json_decode(file_get_contents('php://input'), true);
    //     if (!$data) {
    //         return $this->redirectToRoute('app_index');
    //     }
    //     if ($security) {
    //         $roles = $security->getRoles();
    //         if (in_array("ROLE_ADMIN", $roles)) {
    //             $userHost = $security->getUserIdentifier();
    //             $rep = $doctrine->getRepository(Users::class);
    //             $user = $rep->findOneBy(['email'=>$userHost]);
    //             $reservations = $reservations->historical(true, 0, false, 0, 0, true);
    //             if ($reservations) {
    //                 $response = ['historical' => $reservations, 'message' => ""];
    //             } else {
    //                 $response = ['historical' => $reservations, 'message' => "Votre historique est vide"];
    //             }
    //         } else {
    //             $response = ['historical' => '', 'message' => "Vous n'avez pas un rôle d'administrateur ou de modérateur du site"];
    //         }
    //     } else {
    //         $response = ['historical' => '', 'message' => "Vous ne vous êtes pas authentifier"];
    //     }
    //     return $this->render('inc/modules/historical/historical-host.html.twig', $response);
    // }

}
