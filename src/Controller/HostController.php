<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Data\DataSite;
use App\Entity\Country;
use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\Users;
use App\Form\DwellingType;
use App\Repository\PostsRepository;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class HostController extends AbstractController
{
    // Requête API Platform pour l'application mobile
    public function __invoke($id, $email, $salt, PostsRepository $postsRep)
    {
        return $postsRep->notification($id, $email, $salt);
    }

    // Ajout d'une habitation en base de données
    #[Route('/mon-compte/hote', name: 'host')]
    public function host(Request $request, DataSite $dataSite, UserInterface $user, SluggerInterface $slugger, ManagerRegistry $doctrine, Security $security)
    {
        $auth = $security->getUser();
        if (!$auth) {
            return $this->redirectToRoute('app_index');
        }
        $calendar = new Calendar();
        $calendar = $calendar::calendar();

        // Créons le formulaire
        $dwelling = new Dwelling();
        $form = $this->createForm(DwellingType::class, $dwelling);
        $form->handleRequest($request);
        $getEmail = $user->getUserIdentifier();
        $dataSite = $dataSite->getDataUser($doctrine, $getEmail, 0);

        // Vérifions que les données renseignées sont correctes
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
                    // Vérifons nos images
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
                    if (count($finalPictures) >= 4 && count($finalPictures) <= 10)  {
                        // Insertion de nos données
                        $em = $doctrine->getManager();
                        $dwelling->setUser($dataSite);
                        $dwelling->setPictures($finalPictures);

                        $postsRep = $doctrine->getRepository(Posts::class);
                        $countryRep = $doctrine->getRepository(Country::class);
                        $country = $countryRep->find($dwelling->getCountry());
                        if ($country) {
                            $dwelling->setCountry($country);
                        }
                        $type = $postsRep->find($dwelling->getType());
                        if ($type) {
                            $dwelling->setType($type);
                        }

                        $em->persist($dwelling);
                        $em->flush();

                        // Insertion des métas données dans la seconde table Dwelling
                        // Table imbriquée
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
                        $flash='';
                        $roles = [];
                        if (!in_array('ROLE_HOST', $auth->getRoles())) {
                            // Modification du role de l'utilisateur si c'est pour sa 1ere fois
                            $em = $doctrine->getManager();
                            $repository = $doctrine->getRepository(Users::class);
                            $user = $repository->findOneBy(['email' => $auth->getUserIdentifier()]);
                            foreach ($auth->getRoles() as $key) {
                                array_push($roles, $key);
                            }
                            array_push($roles, 'ROLE_HOST');
                            $user->setRoles($roles);
                            $em->persist($user);
                            $em->flush();
                            $flash = 'Un nouveau rôle a été ajouté à votre compte. Vous allez être déconnecté';
                        }
                        $this->addFlash("success", "Insertion réussie ! $flash");
                        return $this->redirectToRoute('host');
                    } else {
                        $this->addFlash("error", "Le total de vos images est inférieur à 4 ou supérieur à 10");
                    }
                }
            } else if($form->isSubmitted() && !$form->isValid()) {
                $this->addFlash("error", "Une ou plusieurs erreurs se sont produites, il pourrait s'agir des champs mal renseignés");
            }
        return $this->render('inc/pages/product/add-dwelling.html.twig', [
            'carousel' => true,
            'title' => 'Mode hôte',
            'form' => $form->createView(),
            'calendar' => $calendar,
        ]);
    }

    // Mise en indisponibilité d'un logement par l'hôte
    #[Route('/habition/not-disponible', name: 'unavailable')]
    public function unavailable( ManagerRegistry $doctrine, Security $security, ReservationRepository $reservation)
    {
        // Données utilisateur connecté
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $arrival = $data['arrival'];
            $departure = $data['departure'];
            $dwelling = $data['dwelling'];
            if ($this->isValidDate($arrival) && $this->isValidDate($departure) && !empty($dwelling)) {
            
                $dwelRep = $doctrine->getRepository(Dwelling::class);
                $dwel = $dwelRep->findOneBy(['id'=>$dwelling]);

                $repository = $doctrine->getRepository(Users::class);
                $user = $repository->findOneBy(['email' => $auth->getUserIdentifier()]);
                if ($dwel && ($dwel->getUser()->getId() == $user->getId())) {
                    $arrayDate = $this->date_range($arrival, $departure);
                    foreach ($arrayDate as $value) {
                        $startDate = "start_date = '$value'";
                        $endDate =  "end_date = '$value'";
                        $startDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$dwelling.' AND statut IN ("RESERVED", "UNAVAILABLE", "CONFIRMED") AND '.$startDate.'');
                        $endDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$dwelling.' AND statut IN ("RESERVED", "UNAVAILABLE", "CONFIRMED") AND '.$endDate.'');
                        if ($startDate || $endDate) {
                            return new JsonResponse('{"response":"error", "message":"Les dates sélectionnées sont occupées", "icon":"fas fa-exclamation", "redirect":""}');
                        }
                    }
                    // Insertion des données avec un statut UNAVAILABLE pour indisponible
                    $reservation = new Reservation();
                    $em = $doctrine->getManager();

                    $reservation->setUser($user);
                    $reservation->setDwelling($dwel);
                    $reservation->setStatut('UNAVAILABLE');
                    $reservation->setStartDate(\DateTime::createFromFormat('Y-m-d', $arrival));
                    $reservation->setEndDate(\DateTime::createFromFormat('Y-m-d', $departure));

                    $em->persist($reservation);
                    $em->flush();

                    $output = '{"response":"success", "message":"Les dates sélectionnées ont bien été notées indisponibles, aucune réservation ne pourra être effectuer dans cette période.", "icon":"fas fa-check", "redirect":"true"}';
                } else {
                    $output = '{"response":"error", "message":"Une erreur inattendue est survenue, veuillez recommencer.", "icon":"fas fa-exclamation", "redirect":"/logout"}';
                }
            } else {
                $output = '{"response":"error", "message":"Nous rencontrons une erreure, veuillez vérifier vos dates !", "icon":"fas fa-exclamation", "redirect":"/logout"}';
            }
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation", "redirect":""}';
        }
        return new JsonResponse($output);
    }

    // Fonction de vérification des dates
    function isValidDate($dateString){
        $regEx = "/^\d{4}-\d{2}-\d{2}$/";
        if (!preg_match($regEx, $dateString)) {
            return false;
        }
        $date = strtotime($dateString);
        $date = date('Y-m-d', $date);
        $d = date("Y-m-d");
        if ($d > $date) {
            return false;
        }
        return true;
    }


    // Fonction d'affichage de toutes les dates, de arrivée à départ
    function date_range($first, $last, $step = '+1 day', $output_format = 'Y-m-d' ) {

        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);
    
        while( $current <= $last ) {
    
            $dates[] = date($output_format, $current);
            $current = strtotime($step, $current);
        }
    
        return $dates;
    }

}
