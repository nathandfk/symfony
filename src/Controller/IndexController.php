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

    
        $userRep = $doctrine->getRepository(Users::class);
        $users = $userRep->findAll();
        if ($users) {
            foreach ($users as $user) {
                if (!is_null($user->getDeletedAt())) {
                    $date = new DateTimeImmutable('now', new DateTimeZone("Europe/Paris"));
                    $calcul = strtotime($date->format("Y-m-d H:i:s")) - strtotime($user->getDeletedAt()->format("Y-m-d H:i:s"));
                    if ( $calcul >= 86400*365) {
                        $em = $doctrine->getManager();
                        $userRepDel = $doctrine->getRepository(Users::class);
                        $userDelete = $userRepDel->find($user);
                        $em->remove($userDelete);
                        $em->flush();
                    }
                }
            }
        }

        $dwellingRep = $doctrine->getRepository(Dwelling::class);
        $dwellings = $dwellingRep->findAll();
        if ($dwellings) {
        foreach ($dwellings as $dwel) {
            if (!is_null($dwel->getDeletedAt())) {
                $date = new DateTimeImmutable('now', new DateTimeZone("Europe/Paris"));
                $calcul = strtotime($date->format("Y-m-d H:i:s")) - strtotime($dwel->getDeletedAt()->format("Y-m-d H:i:s"));
                if ( $calcul >= 86400*365) {
                    $em = $doctrine->getManager();
                    $dwelRepDel = $doctrine->getRepository(Dwelling::class);
                    $dwelDelete = $dwelRepDel->find($dwel);
                    $em->remove($dwelDelete);
                    $em->flush();
                }
            }
        }
        }

        $response = [
            'controller_name' => 'IndexController',
            'calendar' => $calendar,
            'homepic' => '',
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
