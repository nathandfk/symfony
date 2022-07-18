<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Entity\Posts;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

class CategoryController extends AbstractController
{
    #[Route('/habitations', name: 'app_habitations')]
    public function index(ManagerRegistry $doctrine, Request $request, DwellingRepository $dwelRep, PaginatorInterface $paginator, ReservationRepository $reservations): Response
    {
        // var_dump($reservations->historical());
        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        $range = $dwelRep->showDwellings("MIN(price) as min, MAX(price) as max", "");
        $min = $range[0]['min'];
        $max = $range[0]['max'];
        $value = isset($_GET['price']) && !empty($_GET['price']) ? $_GET['price'] : $range[0]['max'];
        
        $priceRange = $value<=$max && $min >= 0 ? "price BETWEEN $min AND $value" : null;

        $typeId = isset($_GET['type']) && !empty($_GET['type']) && is_int($_GET['type'])
        ? $_GET['type'] : null;
        
        $order = null;
        $order = isset($_GET['order']) && !empty($_GET['order']) && ($_GET['order'] == 'toc')
            ? TRUE : $order;
        $order = isset($_GET['order']) && !empty($_GET['order']) && ($_GET['order'] == 'tod')
            ? FALSE : $order;
        
        $repository = $doctrine->getRepository(Posts::class);
        $type = $repository->findBy(['type' => $typeId, 'type' => 'TYPE']);
        $types = $repository->findBy(['type' => 'TYPE']);

        $filterType = $type ? $typeId : null;

        $dataDwellings = $dwelRep->showDataDwellings(null, null, null, null, null, $priceRange, $filterType, $order);
        $dataDwellings = $paginator->paginate(
            $dataDwellings,
            $request->query->getInt('page', 1),
            12);
        $price = ($min >= 0 && $max>=$value) ? $value : $max; 
        return $this->render('inc/pages/category/index.html.twig', [
            'carousel' => false,
            'title' => 'Laissez-vous guider',
            'picturesUrl' => $this->getParameter('pictures_directory'),
            'calendar' => $calendar,
            'dataDwellings' => $dataDwellings,
            'min' => $min,
            'max' => $max,
            'value' => $price,
            'types' => $types
        ]);
    }
}
