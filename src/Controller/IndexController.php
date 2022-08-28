<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
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
            'title' => "Réservez votre habitation insolite : yourte, cabane et autres",
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


    // Données Sitemap
    #[Route('/sitemap.xml', defaults: ["_format" => "xml"], name: 'sitemap')]
    public function sitemap(DwellingRepository $dwelRep)
    {
        // Récupérons les données de nos logements
        $dwel = $dwelRep->showDataDwellings();
        
        $response = ["dwellings" => $dwel];

        // retourne une réponse au format XML
        $output = new Response(
            $this->renderView('sitemap.html.twig', $response),
            200
        );
        $output->headers->set('Content-Type', 'text/xml');

        return $output;
    }
}
