<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Message;
use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Error;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ProductController extends AbstractController
{
    // Affichage des détails d'un logement en fonction de son identifiant ID
    #[Route('/habitation/{slug}/{id}', name: 'app_habitation')]
    public function habitation(string $slug, int $id, DwellingRepository $dwelRep, ReservationRepository $reservRep, Calendar $calendarDate, ManagerRegistry $doctrine, Security $security, MailerInterface $mailer): Response
    {
        if (isset($_REQUEST['payment_intent']) && $_REQUEST['redirect_status'] === 'succeeded') {

            $repository = $doctrine->getRepository(ReservationMeta::class);
            $reservationMeta = $repository->findBy(['value' => $_REQUEST["payment_intent"]]);
            $reservationMetaId = $reservationMeta[0]->getReservation();

            $entityManager = $doctrine->getManager();
            $reservation = $entityManager->getRepository(Reservation::class)->find($reservationMetaId);

            if (!$reservation) {
                throw $this->createNotFoundException(
                    'Aucune réservation trouvée avec cet id '.$id
                );
            }
            // Modification du statut IN_PROGRESS en RESERVED après une commande réalisée avec succès
            // Le prochain statut est CONFIRMED seul l'hôte du logement peut l'attribuer 
            $reservation->setStatut('RESERVED');
            $reservation->setReservedAt(new DateTimeImmutable("now", new DateTimeZone("Europe/Paris")));
            $reservation->setUpdatedAt(new DateTimeImmutable("now", new DateTimeZone("Europe/Paris")));
            $entityManager->persist($reservation);
            $entityManager->flush();

            $repository = $doctrine->getRepository(Posts::class);
            $welcome = $repository->findOneBy(['type' => 'WELCOME']);
            $historical = $reservRep->historical(true, null, false, null, $reservationMetaId->getId());

            foreach ($historical as $element) {
                $firstname = $element[0];
                $lastname = $element[1];
                $email = $element[2];
                $product_title = $element[4];
                $insertTotalPrice = $element[9];
                $arrival = $element[5];
                $departure = $element[6];
                $userDwellingId = $element[13];
                $userClientId = $element[14];
                $city = $element[12];
                
                // Création d'une conversation en ajoutant dans la messagerie du client un message de confirmation
                $message = $welcome->getDescription();
                $message = str_replace("_firstname_", $firstname, $message);
                $message = str_replace("_lastname_", $lastname, $message);
                $message = str_replace("_title_", $product_title, $message);
                $message = str_replace("_totalprice_", $insertTotalPrice, $message);
                $message = str_replace("_arrival_", $arrival, $message);
                $message = str_replace("_departure_", $departure, $message);
                $message = str_replace("_city_", $city, $message);
                $em = $doctrine->getManager();
                $insertMessage = new Message();
                $repository = $doctrine->getRepository(Users::class);
                $sender = $repository->find($userDwellingId);
                $recipient = $repository->find($userClientId);
                $insertMessage->setSender($sender);
                $insertMessage->setRecipient($recipient);
                $insertMessage->setMessage($message);
                $em->persist($insertMessage);
                $em->flush();   
                

                $postsRep = $doctrine->getRepository(Posts::class);
                $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);

                $dwellingData = $doctrine->getRepository(Dwelling::class);
                $dwel = $dwellingData->find($reservation->getDwelling()->getId());

                $userData = $doctrine->getRepository(Users::class);
                $users = $userData->find($dwel->getUser()->getId());

                $name = $firstname;
                $nameHost = $users->getFirstName();
                $emailUser = $email;
                $emailHost = $users->getEmail();

                // Envoie des mails au client et à l'hôte
                if ($posts) {
                    foreach ($posts as $post) {
                        $emailHost = (new Email())
                            ->from("AtypikHouse <".$post->getDescription().">")
                            ->to($emailHost)
                            ->subject('RÉSERVATION DE VOTRE LOGEMENT')
                            ->text('RÉSERVATION CONFIRMÉE')
                            ->html("
                            <div>
                            <p>Bonjour <b>$nameHost</b></p>
                            <p>Votre logement vient d'être réserver par un membre de AtypikHouse.</p>
                            <p>Merci de lui donner votre réponse depuis votre espace dans la rubrique historique et de lui transmettre les données ou indications précis du logement depuis la messagerie du site.</p>
                            <p>Nous vous remercions pour la confiance que vous nous accorder.</p>
                            <p>L'équipe AtypikHouse.</p>
                            <div style='text-align: center;'>
                            <img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                            </div>
                            ");
                        $mailer->send($emailHost);

                        $email = (new Email())
                            ->from("AtypikHouse <".$post->getDescription().">")
                            ->to($emailUser)
                            ->subject('NOUS VOUS CONFIRMONS VOTRE RÉSERVATION')
                            ->text('RÉSERVATION CONFIRMÉE')
                            ->html("
                            <div>
                            <p>Bonjour <b>$name</b></p>
                            <p>Votre réservation a bien été enregistré, vous pouvez dès à présent directement échangé avec l'hôte depuis votre espace dans la rubrique message.</p>
                            <p>L'hôte vous enverra toutes les informations nécessaires.</p>
                            <p>Vous pouvez annuler votre réservation à tout moment avant votre date d'arrivée.</p>
                            <p>Un remboursement immédiat est émis vers votre compte lors d'une annulation, vous percevez votre argent dans votre compte bancaire sous un délai de 10 jours.</p>
                            <p>Nous vous remercions pour la confiance que vous nous accorder.</p>
                            <p>L'équipe AtypikHouse.</p>
                            <div style='text-align: center;'>
                            <img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                            </div>
                            ");

                        $mailer->send($email);
                    }
                }
            }
            return $this->redirectToRoute('checkout_success', [
                'id' => $reservation->getId()
            ]);
        }
        $slug = str_replace('-', ' ', $slug);
        $slug = ucfirst($slug);
        $dwellings = $dwelRep->showDataDwellings($id);
        if (empty($dwellings)) {
            return $this->redirectToRoute('app_habitations');
        }
        $finalDateNotDisponible = [];
        foreach ($dwellings as $dnd) {
            foreach ($dnd[13] as $oneByOnePeriod) {
                $startDate = $oneByOnePeriod['start_date'];
                $endDate = $oneByOnePeriod['end_date'];
                $date = $this->date_range($startDate, $endDate);
                foreach ($date as $oneDate) {
                    array_push($finalDateNotDisponible, $oneDate);
                }
            }
        }
        
        $calendar = $calendarDate->calendar();
        $calendarReset = !empty($finalDateNotDisponible) ? $calendarDate->calendar($finalDateNotDisponible, true) : $calendarDate->calendar();
        $likes = $comments = false;
        $auth = $security->getUser();
        if ($auth) {
            $userTable = $doctrine->getRepository(Users::class);
            $user = $userTable->findOneBy(['email' => $auth->getUserIdentifier()]);

            // Vérifier si l'utilisateur n'a pas encore commenté ou apprécié un logement
            $reservationTable = $doctrine->getRepository(Reservation::class);
            $data = $reservationTable->findBy(['user' => $user->getId(), 'dwelling' => $id], ["id" => "DESC"], 1);

            if ($data) {
                if ($data[0]->getStatut() == "CONFIRMED") {
                    $likes = $comments = true;
                    $old = strtotime($data[0]->getStartDate()->format('Y-m-d'));
                    $new = new DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));

                    $postTable = $doctrine->getRepository(Posts::class);
                    $postsLike = $postTable->findBy(['user' => $user->getId(), 'dwelling' => $id, 'type' => 'LIKES', 'number' => $data[0]->getId()], ["id" => "DESC"], 1);
                    $postsComments = $postTable->findBy(['user' => $user->getId(), 'dwelling' => $id, 'type' => 'COMMENTS', 'number' => $data[0]->getId()], ["id" => "DESC"], 1);

                    // Affichage du formulaire de commentaire et d'appréciation si une réservation est arrivé à son jour ou est passé
                    if ((strtotime($new->format('Y-m-d')) - $old) >= 0) {
                        $likes = $comments = true;
                    } else {
                        $likes = $comments = false;
                    }
                    if ($postsLike) {
                        $likes = false;
                    }
                    if($postsComments){
                        $comments = false;
                    } 
                }
            }
        }
        return $this->render('inc/pages/product/show-dwelling.html.twig', [
            'controller_name' => 'ProductController',
            'dwellings' => $dwellings,
            'calendar' => $calendar,
            'title' => $dwellings[0][0]['title'],
            'calendarReset' => $calendarReset,
            'likes' => $likes,
            'comments' => $comments,
        ]);
    }


    #[Route('/checkout', name: 'single_product_check', methods:["POST"])]
    public function check(ReservationRepository $reservation, ManagerRegistry $doctrine, DwellingRepository $dwelRep)
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $arrival = $data['arrival'];
        $departure = $data['departure'];
        $dwellingId = $data['dwelling'];
        if ($this->isValidDate($arrival) && $this->isValidDate($departure)) {
            $showDateBetwween = $this->date_range($arrival, $departure);
            $date = "";
            $dateCheck = [];
            $countDay = count($showDateBetwween);

            /* Price */

            $dwellings = $dwelRep->showDataDwellings($dwellingId);
            $price = "";
            foreach ($dwellings as $dwelling) {
                $price = $dwelling[0]['price'];
            }
            $postRep = $doctrine->getRepository(Posts::class);
            $tax = $postRep->findBy(['type' => strtoupper("tax")]);
            $tax_service = $tax ? intval($tax[0]->getDescription()) : 10;
            $stripe = false;
            $dayOf = intval($countDay)-1;
            $totalPrice = $this->priceOfClient(intval($price), $dayOf, $tax_service, $stripe, false, false);
            $subTotalPrice = $this->priceOfClient(intval($price), $dayOf, $tax_service, $stripe, true, false);
            $taxService = $this->priceOfClient(intval($price), $dayOf, $tax_service, $stripe, false, true);
            /* Price */

            foreach ($showDateBetwween as $value) {
                $startDate = "start_date = '$value'";
                $endDate =  "end_date = '$value'";
                $startDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$dwellingId.' AND statut IN ("RESERVED", "UNAVAILABLE", "CONFIRMED") AND '.$startDate.'');
                $endDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$dwellingId.' AND statut IN ("RESERVED", "UNAVAILABLE", "CONFIRMED") AND '.$endDate.'');
                if ($startDate || $endDate) {
                    $dateCheck = [true];
                }
            }
            $countDay = intval($countDay)-1;
            $response = '{"response": "success", "dwelling": "'.$dwellingId.'", "nb_day": "'.$countDay.'", "price": "'.$price.'", "total_price": "'.$totalPrice.'", "sub_total_price": "'.$subTotalPrice.'", "tax_service": "'.$taxService.'"}';
            if (count($dateCheck) > 0) {
                $response = '{"response":"error", "type":"occupée"}';
            }
        } else {
            $response = '{"response":"error", "type":"undefine"}';
        }
        return new JsonResponse($response);
    }

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


    // Création d'un intent de paiement Stripe
    public function create($totalPrice, $title, $user_id, $product_id){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51GD6saG2KF2h4mZbuzmOm3C372M2rcRQYd3jsLcLsKxEMh6oEwwnsPHtfm62OvpeUwYikn3ha0Ja4gkoz8MHlv8600HSvfcksV');

        header('Content-Type: application/json');
        
        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);
            // Create a PaymentIntent with amount and currency
            $description = $title.'_'.$product_id.'_'.$user_id;
            $description = "AtypikHouse - Réservation";
            $paymentIntent = \Stripe\PaymentIntent::create([

                // "customer" => "cus_L0XJ8Lv35Bcx0d",
                "setup_future_usage" => "off_session",
                'amount' => $totalPrice,
                'currency' => 'eur',
                // 'automatic_payment_methods' => [
                //     'enabled' => true,
                // ],
                'payment_method_types' => ['card'],
                'description' => $description,
            ]);
        
            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];
            $json= json_encode($output);
        } catch (Error $e) {
            http_response_code(500);
            $output = ['error' => $e->getMessage()];
            $json = json_encode($output);
            
        }
        return $output;
    }


    // Création de route et envoie des données de réservation par get
    #[Route('/checkout/paiement/{id}/{arrival}/{departure}/{adults}/{childrens}/{babies}/{animals}', name: 'app_checkout_paiement')]
    public function paiement(int $id, string $arrival, string $departure, string $adults, string $childrens, string $babies, string $animals, ReservationRepository $reservation, ManagerRegistry $doctrine, DwellingRepository $dwelRep, Security $security)
    {
        $countAnimals = $animals != "ND" ? $animals : 0;
        $countChildrens = $childrens != "ND" ? $childrens : 0;
        $countAdults = $adults != "ND" ? $adults : 0;
        $countBabies = $babies != "ND" ? $babies : 0;
        $totalTravelers = intval($countAnimals)+intval($countChildrens)+intval($countAdults)+intval($countBabies);
        $security = $security->getUser();

        // Vérifions si l'utilisateur s'est authentifié
        if ($security) {
            $userAuth = $security->getUserIdentifier();

            // Vérifions si les dates sont correctes, au bon format yyyy-mm-dd
            if ($this->isValidDate($arrival) && $this->isValidDate($departure)) {
                
                // Définissons nos variables avant envoie
                /* Id User Connected */
                $repository = $doctrine->getRepository(Users::class);
                $users = $repository->findOneBy(array("email" => $userAuth));
                /* End Id User Connected */

                $showDateBetwween = $this->date_range($arrival, $departure);
                $dateCheck = [];
                $countDay = count($showDateBetwween);

                /* Start Price */
                $dwellings = $dwelRep->showDataDwellings($id);
                $price = $user_id = $product_title = $product_id = $maxPeople = "";
                foreach ($dwellings as $dwelling) {
                    $price = $dwelling[0]['price'];
                    $user_id = $dwelling[0]['user_id'];
                    $product_title = $dwelling[0]['title'];
                    $product_id = $dwelling[0]['id'];
                    foreach ($dwelling[1] as $meta) {
                        if ($meta['field'] == '_max_people'){
                            $maxPeople = $meta['value'];
                        }
                    }
                }
                /* End Price */
                if ($totalTravelers <= intval($maxPeople)) {
                foreach ($showDateBetwween as $value) {
                    $startDate = "start_date = '$value'";
                    $endDate =  "end_date = '$value'";
                    $startDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$id.' AND statut="RESERVED" AND '.$startDate.'');
                    $endDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$id.' AND statut="RESERVED" AND '.$endDate.'');
                    if ($startDate || $endDate) {
                        $dateCheck = [true];
                    }
                }
                $countDay = intval($countDay)-1;
                
                // Récupération le pourcentage de nos frais de service depuis la base de données 
                $postRep = $doctrine->getRepository(Posts::class);
                $tax = $postRep->findBy(['type' => strtoupper("tax")]);
                $tax_service = $tax ? intval($tax[0]->getDescription()) : 10;

                // Calcul des prix avec la fonction priceOfClient
                $totalPrice = $this->priceOfClient($price, intval($countDay), $tax_service, true, false, false);
                $insertTotalPrice = $this->priceOfClient($price, intval($countDay), $tax_service, false, false, false);
                $subTotalPrice = $this->priceOfClient($price, intval($countDay), $tax_service, false, true, false);
                $taxService = $this->priceOfClient($price, intval($countDay), $tax_service, false, false, true);
                $output = $this->create($totalPrice, $product_title, $user_id, $product_id);
                
                if ($output) {
                    // Envoyons nos données à la fonction insertReservation pour insertion
                    $clientSecret = $output['clientSecret'];
                    $paymentIntent = explode('_secret_', $clientSecret);
                    $this->insertReservation($doctrine, $id, "IN_PROGRESS", $arrival, $departure, $paymentIntent[0], $clientSecret, $adults, $childrens, $babies, $animals, $insertTotalPrice, $countDay, $subTotalPrice, $taxService, json_encode($dwellings));
                }
                if (count($dateCheck) > 0) {
                    $output = '{"clientSecret": "ND"}';
                }
                } else {
                    echo "<script>window.localStorage.setItem('response-notification', 'Une erreur s'est produite')</script>";
                    $output = '{"clientSecret": "ND"}';
                }

                return new JsonResponse($output);
            }
        }
    }



    // Calcul du prix total, tax de services en fonction du pourcentage et du sous total
    public function priceOfClient($unitPrice, $nbDay, $tax_service, bool $stripe, bool $showSubTotal, bool $showTax){
        $subTotal = $stripe ? intval($unitPrice) * intval($nbDay) * 100 : intval($unitPrice) * intval($nbDay);
        $tax = ($subTotal * intval($tax_service)) / 100;
        $total = $subTotal + $tax;
        if ($showSubTotal) {
            return number_format($subTotal, 2, '.', '');
        } else if($showTax){
            return number_format($tax, 2, '.', '');
        } else if (!$stripe) {
            return number_format($total, 2, '.', '');
        }
        return $total;
    }


    // Insertion des données de réservation
    public function insertReservation($doctrine, $dwelling_id, $statut, $arrival, $departure, $paymentIntent, $clientSecret, $adults, $childrens, $babies, $animals, $totalPrice, $countDay, $subTotalPrice, $taxService, $dataDwelling)
    {
        $dataPayment = ["_payment_intent" => $paymentIntent, "_client_secret" => $clientSecret, "_adults" => $adults, "_childrens" => $childrens, "_babies" => $babies, "_animals" => $animals, "_price_of_reservation" => $totalPrice,
        "_nb_day" => $countDay, "_sub_total_price" => $subTotalPrice, "_tax_service" => $taxService, "_data_dwelling" => $dataDwelling, "_payment_iban" => "",  "_payment_date" => "", "_payment_statut" => ""];
        $em = $doctrine->getManager();
        $insertReservation = new Reservation();
        $repository = $doctrine->getRepository(Dwelling::class);
        $dwelling = $repository->find($dwelling_id);

        $insertReservation->setUser($this->getUser());
        $insertReservation->setDwelling($dwelling);
        $insertReservation->setStatut($statut);
        $insertReservation->setStartDate(\DateTime::createFromFormat('Y-m-d', $arrival));
        $insertReservation->setEndDate(\DateTime::createFromFormat('Y-m-d', $departure));
        $em->persist($insertReservation);
        $em->flush();
        
        $repository = $doctrine->getRepository(Reservation::class);
        $reservation = $repository->findBy(['dwelling' => $dwelling_id], ['id' => "DESC"], 1);
        $last_id = "";
        foreach ($reservation as $key) {
            $last_id = $key->getId();
        }
        $repository = $doctrine->getRepository(Reservation::class);
        $reservationData = $repository->find($last_id);

        // Table imbriquée
        // Données meta
        foreach ($dataPayment as $oneData => $value) {
            $insertReserMeta = new ReservationMeta();
            $insertReserMeta->setReservation($reservationData);
            $insertReserMeta->setField($oneData);
            $insertReserMeta->setValue($value);
            $em->persist($insertReserMeta);
            $em->flush();
        }
        
    }

}
