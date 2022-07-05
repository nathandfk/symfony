<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('inc/pages/simple-pages/contact.html.twig', [
            'controller_name' => 'CategoryController',
            'title' => 'Contactez-nous',
            'carousel' => false,
        ]);
    }

    #[Route('/dwelling', name: 'dwelling')]
    public function dwelling(): Response
    {
        return $this->render('inc/pages/category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    // #[Route('/hote', name: 'hote')]
    // public function hote(): Response
    // {
    //     return $this->render('inc/pages/product/add-product.html.twig', [
    //         'controller_name' => 'CategoryController',
    //     ]);
    // }

    #[Route('/mentions-légales', name: 'legalnotice')]
    public function legalnotice(): Response
    {
        return $this->render('inc/pages/simple-pages/legalnotice.html.twig', [
            'carousel' => true,
            'title' => 'Mentions légales',
        ]);
    }

    #[Route('/conditions-générales-de-vente', name: 'cgv')]
    public function cgv(): Response
    {
        return $this->render('inc/pages/simple-pages/cgv.html.twig', [
            'carousel' => true,
            'title' => 'Conditions générales de vente',
        ]);
    }

    #[Route('/conditions-générales-dutilisation', name: 'cgu')]
    public function cgu(): Response
    {
        return $this->render('inc/pages/simple-pages/cgu.html.twig', [
            'carousel' => true,
            'title' => 'Conditions générales d\'utilisation',
        ]);
    }

    #[Route('/foire-aux-questions', name: 'faq')]
    public function faq(): Response
    {
        return $this->render('inc/pages/simple-pages/faq.html.twig', [
            'carousel' => true,
            'title' => 'Foire aux questions',
        ]);
    }
    
}
