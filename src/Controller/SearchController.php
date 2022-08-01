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
    // Création d'une route et affichage des données de la page recherche
    #[Route('/search', name: 'app_search')]
    public function index(Calendar $calendar, Request $request, DwellingRepository $dwelRep,  PaginatorInterface $paginator): Response
    {
        // Récupérons nos GET et vérifions les
        if (!$_GET['place'] && !$_GET['arrival'] 
        && !$_GET['departure'] && !$_GET['adult'] 
        && !$_GET['children'] && !$_GET['baby']
        && !$_GET['animal']) {
            return $this->redirectToRoute('app_habitations');
        }

        $maxPeople = 0;
        $start_date = !is_null($_GET['arrival']) ? $_GET['arrival'] : null;
        $end_date = !is_null($_GET['departure']) ? $_GET['departure'] : null;
        $search = !is_null($_GET['place']) ? $_GET['place'] : null;
        $maxPeople += !is_null($_GET['children']) ? intval($_GET['children']) : null;
        $maxPeople += !is_null($_GET['adult']) ? intval($_GET['adult']) : null;
        $maxPeople += !is_null($_GET['baby']) ? intval($_GET['baby']) : null;
        $maxPeople += !is_null($_GET['animal']) ? intval($_GET['animal']) : null;

        $calendar = $calendar->calendar();
        // Récupérons nos données
        $dataDwellings = $dwelRep->showDataDwellings(null, $start_date, $end_date, $search, $maxPeople);
        // Pagination
        $dataDwellings = $paginator->paginate(
            $dataDwellings,
            $request->query->getInt('page', 1),
            3);
        $locations = [];
        foreach ($dataDwellings as $key) {
            array_push($locations, [$key[0]['city'], $key[0]['longitude'], $key[0]['latitude']]);
        }

        // Retournons nos paramètres
        return $this->render('inc/pages/search/index.html.twig', [
            'carousel' => true,
            'calendar' => $calendar,
            'dataDwellings' => $dataDwellings,
            'locations' => $locations,
            'title' => 'Votre recherche en quelques gestes',
        ]);
    }
}
