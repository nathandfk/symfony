<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Posts;
use App\Repository\DwellingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

class CategoryController extends AbstractController
{
    // Affichage des habitions du site
    #[Route('/habitations', name: 'app_habitations')]
    public function index(ManagerRegistry $doctrine, Request $request, DwellingRepository $dwelRep, PaginatorInterface $paginator): Response
    {
        // Récupération du calendrier
        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        // Récupérons le prix minimal et maximal en fonction du statut du logement ou si le logement a été supprimé
        $range = $dwelRep->showDwellings("MIN(price) as min, MAX(price) as max", "WHERE activate=true AND deleted_at IS NULL");
        $min = $range[0]['min'];
        $max = $range[0]['max'];
        
        // Initialisation d'une valeur
        $value = isset($_GET['price']) && !empty($_GET['price']) ? $_GET['price'] : $max;

        // Requête a envoyé pour l'affichage des prix d'une fourchette donnée
        $priceRange = $value<=$max && $min <= $value ? "price BETWEEN $min AND $value" : null;

        $typeId = isset($_GET['type']) && !empty($_GET['type'])
        ? $_GET['type'] : null;
        
        $order = isset($_GET['order']) && !empty($_GET['order']) && ($_GET['order'] == 'toc')
            ? TRUE : null;
        
        // Récupérons les données type se trouvant dans la table posts 
        $repository = $doctrine->getRepository(Posts::class);
        $type = $repository->findOneBy(['id' => $typeId, 'type' => 'TYPE']);
        $types = $repository->findBy(['type' => 'TYPE']);

        $filterType = $type ? $typeId : null;

        // Données des habitats en fonction des requêtes précédentes 
        $dataDwellings = $dwelRep->showDataDwellings(null, null, null, null, null, $priceRange, $filterType, $order);

        // Pagination de nos données
        $dataDwellings = $paginator->paginate(
            $dataDwellings,
            $request->query->getInt('page', 1),
            12);

        $price = ($min >= 0 && $max>=$value) ? $value : $max; 

        // Retournons nos valeurs
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
