<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CheckoutController extends AbstractController
{
    #[Route('/checkout/success/{id}', name: 'checkout_success')]
    public function habitation(int $id, ReservationRepository $reservations, Calendar $calendarDate, ManagerRegistry $doctrine, Security $security): Response
    {
        $reservation = $reservations->historical(true, 0, false, 0, $id);
        $reservedAt = $reservations->showReservation("reserved_at", "WHERE id=$id");
        $first = strtotime($reservedAt[0]['reserved_at']);

        $zone = new \DateTimeZone('Europe/Paris');
        $seconDate = new DateTimeImmutable('now', $zone);

        $second = strtotime($seconDate->format('Y-m-d H:i:s'));

        if (($second-$first)>30) {
            return $this->redirectToRoute("app_habitations");
        }



        return $this->render('inc/pages/checkout/success.html.twig', [
            'controller_name' => 'ProductController',
            'reservation' => $reservation,
        ]);
    }


}

