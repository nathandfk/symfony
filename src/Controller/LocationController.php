<?php

namespace App\Controller;

use App\Repository\CityRepository;
use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    #[Route('/search/location', name: 'location')]
    public function location(CountryRepository $cityRep)
    {
        $data = json_decode(file_get_contents('php://input'), true);
        // if (!$data) {
        //     return $this->redirectToRoute('app_index');
        // }
        $location = $data['location'];
        $dataLocation = $cityRep->location($location);
        
        return $this->render('inc/modules/location/location.html.twig', [
            'locations' => $dataLocation,
        ]);
    }
}
