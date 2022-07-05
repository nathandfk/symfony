<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Repository\DwellingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

class CategoryController extends AbstractController
{
    #[Route('/habitations', name: 'app_habitations')]
    public function index(ManagerRegistry $doctrine, Request $request, DwellingRepository $dwelRep, PaginatorInterface $paginator): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        // $repository = $doctrine->getRepository(Dwelling::class);
        // $dwellings = $repository->findAll();
        $dataDwellings = $dwelRep->showDataDwellings();

        $dataDwellings = $paginator->paginate(
            $dataDwellings,
            $request->query->getInt('page', 1),
            12);
        return $this->render('inc/pages/category/index.html.twig', [
            'carousel' => true,
            'title' => 'Laissez-vous guider',
            'picturesUrl' => $this->getParameter('pictures_directory'),
            'calendar' => $calendar,
            'dataDwellings' => $dataDwellings,
        ]);
    }
}
