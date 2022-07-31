<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Posts;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ManagerRegistry $doctrine, DwellingRepository $dwelRep): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        $postsRep = $doctrine->getRepository(Posts::class);

        $ideas = $dwelRep->showDataDwellings(null, null, null, null, null, null, null, null, true);

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
        return $this->render('index.html.twig', $response);
    }
}
