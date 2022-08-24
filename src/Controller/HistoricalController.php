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
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;

class HistoricalController extends AbstractController
{
    // Requête API Platform pour l'application mobile
    public function __invoke($id, $statut, $salt, ReservationRepository $reservRep)
    {
        return $reservRep->update($id, $statut, $salt);
    }


    // Affichage des historiques hôtes
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



    // Affichage des historiques clients
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



    // Action au niveau des historiques, confirmation ou annulation
    #[Route('/mon-compte/historical/action', name: 'historical.action')]
    public function historicalAction(ManagerRegistry $doctrine, Security $security, MailerInterface $mailer)
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
                // Annulation par le client
                if ($btn == "annuled") {
                    // Vérifions si l'habitat réservé ou la date d'indisponibilité verrouillé par l'hôte correspond bien au critère d'annulation
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

                                    // Envoie de mail de confirmation
                                    $postsRep = $doctrine->getRepository(Posts::class);
                                    $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                                    $firstName = $user->getFirstName();
                                    if ($posts) {
                                        foreach ($posts as $post) {
                                            $email = (new Email())
                                                ->from($post->getDescription())
                                                ->to($user->getEmail())
                                                ->subject('Réservation annulée')
                                                ->text('Réservation annulée')
                                                ->html("
                                                <div>
                                                <p>Bonjour $firstName,</p>
                                                <p>Votre réservation a bien été annuler.</p>
                                                <p>Votre remboursement apparaître sur votre compte sous un délai de 10 jours, dépasser ce délai vous pouvez nous faire recours via la page d'accueil.</p>
                                                <p>Merci pour l'intérêt que vous nous accordez.</p>
                                                <p>L'équipe AtypikHouse.</p>
                                                <div style='text-align: center;'>
                                                <img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                                                </div>
                                                ");

                                            $mailer->send($email);
                                        }
                                    }
                                    $output = '{"response":"success", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-check"}';
                                } else {
                                    $output = '{"response":"error", "message":"Une erreur est survenue, veuillez recommencer ou contactez l\'administrateur", "icon":"fas fa-exclamation"}';
                                }
                            } else {
                                $output = '{"response":"error", "message":"Cette réservation n\'est plus modifiable, la date d\'arrivée est aujourd\'hui", "icon":"fas fa-exclamation"}';
                            }
                        }
                    }
                    // Annulation par l'hôte
                } else if($btn == "annuled_by_host"){
                    // Vérifions si l'habitat réservé ou la date d'indisponibilité verrouillé par l'hôte correspond bien au critère d'annulation
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
                                        $userClient = $userRep->find($reservation->getUser()->getId());

                                        // Récupération du mail admin et envoie de mail de confirmation aux clients
                                        $postsRep = $doctrine->getRepository(Posts::class);
                                        $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                                        $firstName = $userClient->getFirstName();
                                        $mail = $userClient->getEmail();
                                        if ($posts) {
                                            foreach ($posts as $post) {
                                                $email = (new Email())
                                                    ->from($post->getDescription())
                                                    ->to($mail)
                                                    ->subject('Réservation annulée')
                                                    ->text('Réservation annulée')
                                                    ->html("
                                                    <div>
                                                    <p>Bonjour $firstName,</p>
                                                    <p>Votre réservation a été annuler par l'hôte.</p>
                                                    <p>Vous pouvez toujours prendre un autre habitat parmis ceux que nous vous proposons.</p>
                                                    <p>Votre remboursement apparaître sur votre compte sous un délai de 10 jours, dépasser ce délai vous pouvez nous faire recours via la page d'accueil.</p>
                                                    <p>Merci pour l'intérêt que vous nous accordez.</p>
                                                    <p>L'équipe AtypikHouse.</p>
                                                    <div style='text-align: center;'>
                                                    <img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                                                    </div>
                                                    ");

                                                $mailer->send($email);
                                            }
                                        }
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
                                // Modification du statut de la réservation
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


}
