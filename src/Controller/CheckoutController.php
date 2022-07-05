<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Repository\DwellingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CheckoutController extends AbstractController
{
    #[Route('/checkout/success/{id}', name: 'checkout_success')]
    public function habitation(int $id, DwellingRepository $dwelRep, Calendar $calendarDate, ManagerRegistry $doctrine, Security $security): Response
    {
        return $this->render('inc/pages/checkout/success.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }


}
