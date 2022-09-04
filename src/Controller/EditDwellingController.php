<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Country;
use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Entity\Posts;
use App\Entity\Users;
use App\Form\DwellingType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;

class EditDwellingController extends AbstractController
{
    // Récupération pour affichage et Modification des données d'habitations
    #[Route('/mon-compte/hote/{id}', name: 'edit_dwelling')]
    public function editDwelling(Request $request, int $id, ManagerRegistry $doctrine, Security $security, SluggerInterface $slugger)
    {
        // Création d'un formulaire
        $dwelling = new Dwelling();
        $form = $this->createForm(DwellingType::class, $dwelling);
        $form->handleRequest($request);

        // Récupération du calendrier
        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        $dwelRep = $doctrine->getRepository(Dwelling::class);
        $dwel = $dwelRep->find($id);

        if (!$dwel) {
            return $this->redirectToRoute('host');
        } 

        
        $auth = $security->getUser();
        $user = $auth->getUserIdentifier();

        $userRep = $doctrine->getRepository(Users::class);
        $userData = $userRep->findOneBy(['email' => $user]);
        $userDwelling = $userRep->find($dwel->getUser());

        if (in_array("ROLE_ADMIN", $userDwelling->getRoles()) || in_array("ROLE_MODERATOR", $userDwelling->getRoles())) {
            if (!in_array("ROLE_ADMIN", $auth->getRoles()) && !in_array("ROLE_MODERATOR", $auth->getRoles())) {
                $this->addFlash('error', "Vous n'êtes pas autorisé à modifier cet habitat");
                return $this->redirectToRoute('host');
            }
        } else {
            if ($userData->getId() != $userDwelling->getId()) {
                $this->addFlash('error', "Vous n'êtes pas autorisé à modifier cet habitat");
                return $this->redirectToRoute('host');
            }
        }

        // Vérifions si notre formulaire est correctement rensigné
        if ($form->isSubmitted() && $form->isValid()) {

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
                    "_max_people" => $_POST['max_people']
                ];
                
                foreach ($dataDwellingMeta as $key => $value) {
                    if ($value == "") {
                        $this->addFlash("error", "Un ou plusieurs champs sont vides, veuillez vérifier vos données ou actualiser votre page ensuite réessayer");
                        return $this->redirectToRoute('host');
                    }
                    if (is_null($key)) {
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
                $finalPictures = !empty($_POST['stock_pic']) ? explode(",", $_POST['stock_pic']) : $dwel->getPictures();
                $arrivalFrom = ["12h00", "13h00", "14h00", "15h00", "16h00"];
                $arrivalUntil = ["20h00", "21h00", "22h00", "23h00", "23h59"];
                $departureBefore = ["12h00", "13h00", "14h00", "15h00", "16h00"];
                $bool = ["TRUE", "FALSE"];
                if(in_array($_POST['arrival_from'], $arrivalFrom) == false || in_array($_POST['arrival_until'], $arrivalUntil) == false || in_array($_POST['departure_before'], $departureBefore) == false){
                    $this->addFlash("error", "Une ou plusieurs données sont incorrectes 1.");
                } else if (in_array($_POST['animals'], $bool) == false || in_array($_POST['breakfast'], $bool) == false || in_array($_POST['water'], $bool) == false || in_array($_POST['eletricity'], $bool) == false || in_array($_POST['parking'], $bool) == false) {
                    $this->addFlash("error", "Une ou plusieurs données sont incorrectes 2.");
                } else {
                    // Vérification des images et ajout des images dans le dossier dédier
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

                            } catch (FileException $e) {}

                            $img_upload_path = $this->getParameter('pictures_directory').'/'.$newFilename;
                            $ex = explode(".", $img_upload_path);
                            switch ($ex[1]) {
                                case 'jpeg':
                                    $img = imagecreatefromjpeg($img_upload_path);
                                    imagejpeg($img, $img_upload_path, 20);  
                                    break;
                                case 'jpg':
                                    $img = imagecreatefromjpeg($img_upload_path);
                                    imagejpeg($img, $img_upload_path, 20);  
                                    break;
                            }

                            array_push($finalPictures, $newFilename);
                        }
                    }
                    // Vérifions si le nombre d'image est respecté
                    if (count($finalPictures) >= 4 && count($finalPictures) <= 10)  {
                        // Insertion des données dans la base de données
                        $em = $doctrine->getManager();
                        $dwel->setUser($userData);
                        $dwel->setPictures($finalPictures);

                        $dwel->setTitle($dwelling->getTitle());
                        $dwel->setPrice($dwelling->getPrice());
                        
                        $dwel->setAddress($dwelling->getAddress());
                        $dwel->setLatitude($dwelling->getLatitude());
                        $dwel->setLongitude($dwelling->getLongitude());
                        $dwel->setState($dwelling->getState());
                        $dwel->setEquipments($dwelling->getEquipments());
                        
                        $dwel->setAbstract($dwelling->getAbstract());
                        $dwel->setDescription($dwelling->getDescription());
                        
                        $dwel->setComplAddress($dwelling->getComplAddress());
                        $dwel->setCity($dwelling->getCity());

                        // Insertion des données pays et type en forme Entité
                        $postsRep = $doctrine->getRepository(Posts::class);
                        $countryRep = $doctrine->getRepository(Country::class);
                        $country = $countryRep->find($dwelling->getCountry());
                        if ($country) {
                            $dwel->setCountry($country);
                        }
                        $type = $postsRep->find($dwelling->getType());
                        if ($type) {
                            $dwel->setType($type);
                        }

                        $em->persist($dwel);
                        $em->flush();


                        foreach ($dataDwellingMeta as $key => $value) {
                            $dwelMetaRep = $doctrine->getRepository(DwellingMeta::class);
                            $dwelMeta = $dwelMetaRep->findBy(['dwelling' => $id]);
                            foreach ($dwelMeta as $meta) {
                                if ($meta->getField() == $key) {
                                    $meta->setValue($value);
                                    $em->persist($meta);
                                    $em->flush();
                                }
                            }
                        }
                        $this->addFlash("success", "Modification réussie !");
                        return $this->redirectToRoute('host');
                    } else {
                        $this->addFlash("error", "Le total de vos images est inférieur à 4 ou supérieur à 10");
                    }
                }
            } else if($form->isSubmitted() && !$form->isValid()) {
                $this->addFlash("error", "Une ou plusieurs erreurs se sont produites, il pourrait s'agir des champs mal renseignés");
            }


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
            'calendar' => $calendar,
        ]);
    }

}
