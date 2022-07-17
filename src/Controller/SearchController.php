<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Repository\DwellingRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Calendar $calendar, Request $request, DwellingRepository $dwelRep,  PaginatorInterface $paginator): Response
    {
        if (!$_GET['place'] && !$_GET['arrival'] 
        && !$_GET['departure'] && !$_GET['adult'] 
        && !$_GET['children'] && !$_GET['baby']
        && !$_GET['animal']) {
            return $this->redirectToRoute('app_habitations');
        }
        $maxPeople = 0;
        $start_date = !empty($_GET['arrival']) ? $_GET['arrival'] : '';
        $end_date = !empty($_GET['departure']) ? $_GET['departure'] : '';
        $search = !empty($_GET['place']) ? $_GET['place'] : '';
        $maxPeople += !empty($_GET['children']) ? intval($_GET['children']) : 0;
        $maxPeople += !empty($_GET['adult']) ? intval($_GET['adult']) : 0;
        $maxPeople += !empty($_GET['baby']) ? intval($_GET['baby']) : 0;
        $maxPeople += !empty($_GET['animal']) ? intval($_GET['animal']) : 0;

        $calendar = $calendar->calendar();
        $dataDwellings = $dwelRep->showDataDwellings(0, $start_date, $end_date, $search, $maxPeople);
        $dataDwellings = $paginator->paginate(
            $dataDwellings,
            $request->query->getInt('page', 1),
            3);
        $locations = [];
        foreach ($dataDwellings as $key) {
            array_push($locations, [$key[0]['city'], $key[0]['longitude'], $key[0]['latitude']]);
        }
        return $this->render('inc/pages/search/index.html.twig', [
            'carousel' => true,
            'calendar' => $calendar,
            'dataDwellings' => $dataDwellings,
            'locations' => $locations,
            'title' => 'Votre recherche en quelques gestes',
        ]);
    }
}
