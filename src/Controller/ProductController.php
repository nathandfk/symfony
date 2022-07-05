<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Error;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ProductController extends AbstractController
{
    #[Route('/habitation/{slug}/{id}', name: 'app_habitation')]
    public function habitation(string $slug, int $id, DwellingRepository $dwelRep, Calendar $calendarDate, ManagerRegistry $doctrine, Security $security): Response
    {
        if (isset($_REQUEST['payment_intent']) && $_REQUEST['redirect_status'] === 'succeeded') {

            $repository = $doctrine->getRepository(ReservationMeta::class);
            $reservationMeta = $repository->findOneBy(['value' => $_REQUEST["payment_intent"]]);
            $reservationMetaId = $reservationMeta->getReservation();

            $entityManager = $doctrine->getManager();
            $reservation = $entityManager->getRepository(Reservation::class)->find($reservationMetaId);

            if (!$reservation) {
                throw $this->createNotFoundException(
                    'Aucune réservation trouvée avec cet id '.$id
                );
            }
            $reservation->setStatut('RESERVED');
            $entityManager->flush();

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
        return $this->render('inc/pages/product/show-dwelling.html.twig', [
            'controller_name' => 'ProductController',
            'dwellings' => $dwellings,
            'calendar' => $calendar,
            'calendarReset' => $calendarReset,
        ]);
    }


    #[Route('/checkout', name: 'single_product_check', methods:["POST"])]
    public function check(ReservationRepository $reservation, DwellingRepository $dwelRep)
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
            $tax_service = 10;
            $stripe = false;
            $dayOf = intval($countDay)-1;
            $totalPrice = $this->priceOfClient(intval($price), $dayOf, $tax_service, $stripe, false, false);
            $subTotalPrice = $this->priceOfClient(intval($price), $dayOf, $tax_service, $stripe, true, false);
            $taxService = $this->priceOfClient(intval($price), $dayOf, $tax_service, $stripe, false, true);
            /* Price */

            foreach ($showDateBetwween as $value) {
                $startDate = "start_date = '$value'";
                $endDate =  "end_date = '$value'";
                $startDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$dwellingId.' AND statut="RESERVED" AND '.$startDate.'');
                $endDate = $reservation->showReservation("*", 'WHERE dwelling_id='.$dwellingId.' AND statut="RESERVED" AND '.$endDate.'');
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

    #[Route('/checkout/paiement/{id}/{arrival}/{departure}/{adults}/{childrens}/{babies}/{animals}', name: 'app_checkout_paiement')]
    public function paiement(int $id, string $arrival, string $departure, string $adults, string $childrens, string $babies, string $animals, ReservationRepository $reservation, ManagerRegistry $doctrine, DwellingRepository $dwelRep, Security $security)
    {
        $countAnimals = $animals != "ND" ? $animals : 0;
        $countChildrens = $childrens != "ND" ? $childrens : 0;
        $countAdults = $adults != "ND" ? $adults : 0;
        $countBabies = $babies != "ND" ? $babies : 0;
        $totalTravelers = intval($countAnimals)+intval($countChildrens)+intval($countAdults)+intval($countBabies);
        $security = $security->getUser();
        if ($security) {
            $userAuth = $security->getUserIdentifier();
            if ($this->isValidDate($arrival) && $this->isValidDate($departure)) {
                
                /* Id User Connected */
                $repository = $doctrine->getRepository(Users::class);
                $users = $repository->findBy(array("email" => $userAuth));
                $auth_id = "";
                foreach ($users as $user) {
                    $auth_id = $user->getId();
                }
                /* End Id User Connected */

                $showDateBetwween = $this->date_range($arrival, $departure);
                $date = "";
                $dateCheck = [];
                $countDay = count($showDateBetwween);

                /* Start Price */
                $dwellings = $dwelRep->showDataDwellings($id);
                $price = "";
                $user_id = "";
                $product_title = "";
                $product_id = "";
                $maxPeople = "";
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
                $tax_service = 10;
                $totalPrice = $this->priceOfClient($price, intval($countDay), $tax_service, true, false, false);
                $insertTotalPrice = $this->priceOfClient($price, intval($countDay), $tax_service, false, false, false);
                $subTotalPrice = $this->priceOfClient($price, intval($countDay), $tax_service, false, true, false);
                $taxService = $this->priceOfClient($price, intval($countDay), $tax_service, false, false, true);
                $output = $this->create($totalPrice, $product_title, $user_id, $product_id);
                
                if ($output) {
                    $clientSecret = $output['clientSecret'];
                    $paymentIntent = explode('_secret_', $clientSecret);
                    $this->insertReservation($doctrine, $id, "IN_PROGRESS", $arrival, $departure, $paymentIntent[0], $clientSecret, $adults, $childrens, $babies, $animals, $insertTotalPrice, $countDay, $subTotalPrice, $taxService);
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







    public function priceOfClient($unitPrice, $nbDay, $tax_service, bool $stripe, bool $showSubTotal, bool $showTax){
        $subTotal = $stripe ? intval($unitPrice) * intval($nbDay) * 100 : intval($unitPrice) * intval($nbDay);
        $tax = ($subTotal * intval($tax_service)) / 100;
        $total = $subTotal + $tax;
        if ($showSubTotal) {
            return $subTotal;
        } else if($showTax){
            return $tax;
        }
        return $total;
    }



    public function insertReservation($doctrine, $dwelling_id, $statut, $arrival, $departure, $paymentIntent, $clientSecret, $adults, $childrens, $babies, $animals, $totalPrice, $countDay, $subTotalPrice, $taxService)
    {
        $dataPayment = ["_payment_intent" => $paymentIntent, "_client_secret" => $clientSecret, "_adults" => $adults, "_childrens" => $childrens, "_babies" => $babies, "_animals" => $animals, "_price_of_reservation" => $totalPrice,
        "_nb_day" => $countDay, "_sub_total_price" => $subTotalPrice, "_tax_service" => $taxService];
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
