<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Posts;
use App\Repository\DwellingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    // Afficharge de la page d'accueil
    #[Route('/', name: 'app_index')]
    public function index(ManagerRegistry $doctrine, DwellingRepository $dwelRep): Response
    {
        // Récupération de notre calendrier
        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        // Récupérons le repository de notre entité Posts
        $postsRep = $doctrine->getRepository(Posts::class);

        // Récupérons les données de nos logements
        $ideas = $dwelRep->showDataDwellings(null, null, null, null, null, null, null, null, true);
        
        // Réponse en array
        $response = [
            'controller_name' => 'IndexController',
            'calendar' => $calendar,
            'homepic' => '',
            'title' => "Réservez votre yourte, votre cabane sur l'eau ou votre cabane dans les arbres",
            'hometitle' => '',
            'abouttitle' => '',
            'aboutabstract' => '',
            'aboutdescription' => '',
            'aboutpic' => '',
            'ideas' => $ideas,
        ];
        $posts = $postsRep->findAll();

        // Injection des valeurs dans la réponse
        foreach ($posts as $post) {
            switch ($post->getType()) {
                case 'HOMEPIC':
                    $response["homepic"] = $post->getDescription();
                    break;
                case 'HOMETITLE':
                    $response["hometitle"] = $post->getDescription();
                    break;
                case 'ABOUTTITLE':
                    $response["abouttitle"] = $post->getDescription();
                    break;
                case 'ABOUTABSTRACT':
                    $response["aboutabstract"] = $post->getDescription();
                    break;
                case 'ABOUTPIC':
                    $response["aboutpic"] = $post->getDescription();
                    break;
                
            }
        }

        // Retournons les valeurs dans la page d'accueil
        return $this->render('index.html.twig', $response);
    }
}
