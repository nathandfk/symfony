<?php

namespace App\Controller;

use App\Data\DataSite;
use App\Entity\Country;
use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Form\DwellingType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class HostController extends AbstractController
{
    #[Route('/mon-compte/hote', name: 'host')]
    public function host(Request $request, DataSite $dataSite, UserInterface $user, SluggerInterface $slugger, ManagerRegistry $doctrine)
    {

        $dwelling = new Dwelling();
        $form = $this->createForm(DwellingType::class, $dwelling);
        $form->handleRequest($request);

        $getEmail = $user->getUserIdentifier();
        $dataSite = $dataSite->getDataUser($doctrine, $getEmail, 0);


        if ($form->isSubmitted() && $form->isValid()) {
            
            $country = $dwelling->getCountry();
            $country = intval($country);
            $repository = $doctrine->getRepository(Country::class);
            $country = $repository->findOneBy(["id" => $country]);

            if ($country) {


                $dataDwellingMeta = [
                    "_animals" => $_POST['animals'],
                    "_breakfast" => $_POST['breakfast'],
                    "_water" => $_POST['water'],
                    "_eletricity" => $_POST['eletricity'],
                    "_parking" => $_POST['parking'],
                    "_minimum_age" => $_POST['minimum_age'],
                    "_surface" => $_POST['surface'],
                    "_piece" => $_POST['piece'],
                    "_arrival_from" => $_POST['arrival_from'],
                    "_arrival_until" => $_POST['arrival_until'],
                    "_departure_before" => $_POST['departure_before'],
                    "_max_people" => $_POST['max_people'],
                    "_equipments" => $_POST['equipments']
                ];
                foreach ($dataDwellingMeta as $key => $value) {
                    if ($value == "") {
                        $this->addFlash("error", "Un ou plusieurs champs sont vides, veuillez vérifier vos données ou actualiser votre page ensuite réessayer");
                        return $this->redirectToRoute('host');
                    }
                }
                if ($_POST['minimum_age'] != "0" && $_POST['minimum_age'] != "3" && $_POST['minimum_age'] != "10") {
                    $this->addFlash("error", "L'age minimal n'est pas correct");
                    return $this->redirectToRoute('host');
                }
                /** 
                 * @var UploadedFile 
                 * 
                 */
                $pictures = $form->get('pictures')->getData();
                $finalPictures = [];
                $arrivalFrom = ["12h00", "13h00", "14h00", "15h00", "16h00"];
                $arrivalUntil = ["20h00", "21h00", "22h00", "23h00", "23h59"];
                $departureBefore = ["12h00", "13h00", "14h00", "15h00", "16h00"];
                $bool = ["TRUE", "FALSE"];

                if(in_array($_POST['arrival_from'], $arrivalFrom) == false || in_array($_POST['arrival_until'], $arrivalUntil) == false || in_array($_POST['departure_before'], $departureBefore) == false){
                    $this->addFlash("error", "Une ou plusieurs données sont incorrectes 1.");
                } else if (in_array($_POST['animals'], $bool) == false || in_array($_POST['breakfast'], $bool) == false || in_array($_POST['water'], $bool) == false || in_array($_POST['eletricity'], $bool) == false || in_array($_POST['parking'], $bool) == false) {
                    $this->addFlash("error", "Une ou plusieurs données sont incorrectes 2.");
                } else {
                    if ($pictures) {
                        foreach ($pictures as $picture) {
                            $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeFilename = $slugger->slug($originalFilename);
                        $newFilename = $safeFilename.'-'.uniqid().'.'.$picture->guessExtension();
                            try {
                                $picture->move(
                                    $this->getParameter('pictures_directory'),
                                    $newFilename
                                );
                            } catch (FileException $e) {
                                // ... handle exception if something happens during file upload
                            }
                        array_push($finalPictures, $newFilename);
                        }
                    }
                
                $em = $doctrine->getManager();
                $dwelling->setUser($dataSite);
                $dwelling->setPictures($finalPictures);
                $dwelling->setAddedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                $dwelling->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                $em->persist($dwelling);
                $em->flush();


                foreach ($dataDwellingMeta as $key => $value) {
                    $dwellingMeta = new DwellingMeta();
                    $repository = $doctrine->getRepository(Dwelling::class);
                    $dwellingId = $repository->findBy([], ['id' => 'DESC'], 1);
                    $dwellingData = $repository->findOneBy(['id' => $dwellingId]);
                    $dwellingMeta->setDwelling($dwellingData);
                    $dwellingMeta->setField($key);
                    $dwellingMeta->setValue($value);
                    $em->persist($dwellingMeta);
                    $em->flush();
                }

                $this->addFlash("success", "Insertion réussie");
                }
                return $this->redirectToRoute('host');
            } else if($form->isSubmitted() && !$form->isValid()) {
                $this->addFlash("error", "Une ou plusieurs erreurs se sont produites, il pourrait s'agir des champs mal renseignés");
            }
        }
        return $this->render('inc/pages/product/add-dwelling.html.twig', [
            'carousel' => true,
            'title' => 'Mode hôte',
            'form' => $form->createView()
        ]);
    }

}
