<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Repository\DwellingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Calendar $calendar, DwellingRepository $dwelRep): Response
    {
        $start_date = "";
        $end_date = "";
        $calendar = $calendar->calendar();
        $dataDwellings = $dwelRep->showDataDwellings(0, $start_date, $end_date);
        return $this->render('inc/pages/search/index.html.twig', [
            'carousel' => true,
            'calendar' => $calendar,
            'dataDwellings' => $dataDwellings,
            'title' => 'Votre recherche en quelques gestes',
        ]);
    }
}
