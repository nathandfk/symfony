<?php

namespace App\Controller;

use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Form\DwellingType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class EditDwellingController extends AbstractController
{
    #[Route('/mon-compte/hote/{id}', name: 'edit_dwelling')]
    public function editDwelling(Request $request, int $id, ManagerRegistry $doctrine, Security $security)
    {
        $dwelling = new Dwelling();
        $form = $this->createForm(DwellingType::class, $dwelling);
        $form->handleRequest($request);


        $dwelRep = $doctrine->getRepository(Dwelling::class);
        $dwel = $dwelRep->findOneBy(['id'=>$id]);
        if (!$dwel) {
            return $this->redirectToRoute('host');
        }
        $dwelRep = $doctrine->getRepository(DwellingMeta::class);
        $dwelMeta = $dwelRep->findBy(['dwelling'=>$dwel->getId()]);

        return $this->render('inc/pages/product/edit-dwelling.html.twig', [
            'form' => $form->createView(),
            'title' => "Modification de l'habitation",
            'dwelling' => $dwel,
            'dwellingMeta' => $dwelMeta,
        ]);
    }


}
