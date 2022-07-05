<?php

namespace App\Controller;

use App\Data\Calendar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('index.html.twig', [
            'controller_name' => 'IndexController',
            'calendar' => $calendar,
        ]);
    }
}
