<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    // Affichage du résumé de la commande
    #[Route('/checkout/success/{id}', name: 'checkout_success')]
    public function habitation(int $id, ReservationRepository $reservations): Response
    {
        // Récupération des données de réservation
        $reservation = $reservations->historical(true, 0, false, 0, $id);
        $reservedAt = $reservations->showReservation("reserved_at", "WHERE id=$id");
        $first = strtotime($reservedAt[0]['reserved_at']);

        // Récupérons notre calendrier
        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        // Récupérons l'heure actuel
        $zone = new \DateTimeZone('Europe/Paris');
        $seconDate = new DateTimeImmutable('now', $zone);

        $second = strtotime($seconDate->format('Y-m-d H:i:s'));

        // Si l'utilisateur fait plus de 3min sur la page, en actualisant cette page il sera redirigé vers toutes les habitations
        // Cela nous permet d'autoriser l'accès qu'aux utilisateurs venant de passer commande 
        if (($second-$first)>120) {
            return $this->redirectToRoute("app_habitations");
        }

        // Retournons nos données sur la page
        return $this->render('inc/pages/checkout/success.html.twig', [
            'reservation' => $reservation,
            'calendar' => $calendar,
        ]);
    }


}

