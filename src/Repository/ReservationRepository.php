<?php

namespace App\Repository;

use App\Entity\Dwelling;
use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\UserMeta;
use App\Entity\Users;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

/**
 * @extends ServiceEntityRepository<Reservation>
 *
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    private $reservationMeta;
    private $users;
    private $registry;
    private $mailer;
    public function __construct(ManagerRegistry $registry, ReservationMetaRepository $reservationMeta, UsersRepository $users, MailerInterface $mailer)
    {
        parent::__construct($registry, Reservation::class);
        $this->reservationMeta = $reservationMeta;
        $this->users = $users;
        $this->registry = $registry;
        $this->mailer = $mailer;
    }

    public function add(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function showReservation(string $selector="*", string $where="")
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT $selector FROM reservation r $where";
        
        $prepare = $conn->prepare($sql);
        $execute = $prepare->executeQuery();
        return $execute->fetchAllAssociative();
    }


    // Annullation des réservations depuis l'application mobile
    public function update(int $id, String $statut, String $salt)
    {
        if ($salt == "_Z34azertNCVI3Y65514-_ddezERTEETAZbn----qse321ghbd_-ghdsrza23436d___") {
            $reservRep = $this->registry->getRepository(Reservation::class);
            $reservation = $reservRep->find($id);
            $em = $this->registry->getManager();
            if ($statut == 'annuled') {
                if (($reservation->getStatut() == "RESERVED") || ($reservation->getStatut() == "CONFIRMED")) {
                    $date = new DateTimeImmutable('now', new DateTimeZone('Europe/Paris'));
                    if ((strtotime($date->format('Y-m-d')) - strtotime($reservation->getStartDate()->format('Y-m-d'))) < 0) {
                        $reservation->setStatut("ANNULED");
                        $em->persist($reservation);
                        $em->flush();
                        $postsRep = $this->registry->getRepository(Posts::class);
                        $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);

                        $reservRep = $this->registry->getRepository(Reservation::class);
                        $annuled = $reservRep->find($id);
                            if ($annuled->getStatut() == "ANNULED") {
                                $reservRepMeta = $this->registry->getRepository(ReservationMeta::class);
                                $meta = $reservRepMeta->findOneBy(['reservation' => $annuled->getId(), "field" => "_payment_intent"]);
                                $this->stripeRefunds($meta->getValue());
                            
                                $usersRep = $this->registry->getRepository(Users::class);
                                $user = $usersRep->find($reservation->getUser()->getId());
                                $firstName = $user->getFirstName();
                                if ($posts) {
                                    foreach ($posts as $post) {
                                        $email = (new Email())
                                            ->from("AtypikHouse <".$post->getDescription().">")
                                            ->to($user->getEmail())
                                            ->subject('Réservation annulée')
                                            ->text('Réservation annulée')
                                            ->html("
                                            <div>
                                            <p>Bonjour $firstName,</p>
                                            <p>Votre réservation a bien été annulée.</p>
                                            <p>Votre remboursement apparaître sur votre compte sous un délai de 10 jours, dépasser ce délai vous pouvez nous faire recours via la page d'accueil.</p>
                                            <p>Merci pour l'intérêt que vous nous accordez.</p>
                                            <p>L'équipe AtypikHouse.</p>
                                            <div style='text-align: center;'>
                                            <img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                                            </div>
                                            ");

                                        $this->mailer->send($email);
                                    }
                                }
                            }
                        $output = ["response" => "success", "message" => "Modification appliquée avec succès"];
                    } else {
                        $output = ["response" => "error", "message" => "La date d'arrivée étant aujourd'hui, vous ne pouvez plus annuler cette réservation."];
                    }
                } else {
                    $output = ["response" => "error", "message" => "Le statut de votre réservation reste inchanger, elle est déjà annulée".$reservation->getStatut()];
                }
            } else if ($statut == 'annuled_by_host'){
                if (($reservation->getStatut() == "RESERVED") || ($reservation->getStatut() == "CONFIRMED")) {
                    $date = new DateTimeImmutable('now', new DateTimeZone('Europe/Paris'));
                    if ((strtotime($date->format('Y-m-d')) - strtotime($reservation->getStartDate()->format('Y-m-d'))) < 0) {
                        $reservation->setStatut("ANNULED_BY_HOST");
                        $em->persist($reservation);
                        $em->flush();
                        $postsRep = $this->registry->getRepository(Posts::class);
                        $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);

                        $reservRep = $this->registry->getRepository(Reservation::class);
                        $annuled = $reservRep->find($id);
                        if ($annuled->getStatut() == "ANNULED_BY_HOST") {
                            $reservRepMeta = $this->registry->getRepository(ReservationMeta::class);
                            $meta = $reservRepMeta->findOneBy(['reservation' => $id, "field" => "_payment_intent"]);
                            $this->stripeRefunds($meta->getValue());

                                $usersRep = $this->registry->getRepository(Users::class);
                                $user = $usersRep->find($reservation->getUser()->getId());
                                $firstName = $user->getFirstName();
                                if ($posts) {
                                    foreach ($posts as $post) {
                                        $email = (new Email())
                                            ->from("AtypikHouse <".$post->getDescription().">")
                                            ->to($user->getEmail())
                                            ->subject('Réservation annulée')
                                            ->text('Réservation annulée')
                                            ->html("
                                            <div>
                                            <p>Bonjour $firstName,</p>
                                            <p>Votre réservation a été annulée par l'hôte.</p>
                                            <p>Vous pouvez toujours prendre un autre habitat parmis ceux que nous vous proposons.</p>
                                            <p>Votre remboursement apparaître sur votre compte sous un délai de 10 jours, dépasser ce délai vous pouvez nous faire recours via la page d'accueil.</p>
                                            <p>Merci pour l'intérêt que vous nous accordez.</p>
                                            <p>L'équipe AtypikHouse.</p>
                                            <div style='text-align: center;'>
                                            <img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                                            </div>
                                            ");

                                        $this->mailer->send($email);
                                    }
                                }
                        }
                        $output = ["response" => "success", "message" => "Modification appliquée avec succès"];
                    } else {
                        $output = ["response" => "error", "message" => "La date d'arrivée étant aujourd'hui, vous ne pouvez plus annuler cette réservation."];
                    }
                } else {
                    $output = ["response" => "error", "message" => "Le statut de votre réservation reste inchanger, elle est déjà annulée".$id];
                }
            } else {
                $output = ["response" => "error", "message" => "Une erreur s'est produit, veuillez fermer l'application et recommencez"];
            }
        } else {
            $output = ["response" => "error", "message" => "Une erreur inattendue s'est produit, veuillez fermer l'application et recommencez"];
        }
        return $output;
    }

    // Remboursement client
    public function stripeRefunds(string $payentIntent){
        $stripe = new \Stripe\StripeClient("sk_test_51GD6saG2KF2h4mZbuzmOm3C372M2rcRQYd3jsLcLsKxEMh6oEwwnsPHtfm62OvpeUwYikn3ha0Ja4gkoz8MHlv8600HSvfcksV");
        $stripe->refunds->create(['payment_intent' => $payentIntent]);
    }

    public function showDataReservation(string $selector="*", string $where="")
    {
        $reservation = $this->showReservation($selector, $where);
        $finalDataReservation = [$reservation];

        foreach ($reservation as $key) {
            $reservation_id = $key["id"];
            $reservMeta = $this->reservationMeta->showReservationMeta($reservation_id, $selector);
            foreach ($reservMeta as $meta) {
                $data = [$meta['field'], $meta['value']];
                array_push($finalDataReservation, $data);
            }
        }
        return $finalDataReservation;
    }


    // Affichage des historiques
    public function historical(bool $client = true, int $client_id = null, bool $host = false, int $host_id = null, int $searchByDwelling = null, $unavailable = false, $admin = false)
    {
        try {
        
        $finalDataHistorical = [];
        $whereClient = $client_id != null ? "AND user_id=$client_id" : "";
        $whereDwelling = $searchByDwelling > 0 ? "AND id=$searchByDwelling" : "";
        $unavailable = $unavailable == true ? "'UNAVAILABLE', 'DISPONIBLE'," : "";
        $reservations = ($admin == true) ?
        $this->showReservation("*", "WHERE statut='CONFIRMED' ORDER BY id DESC")
        : $this->showReservation("*", "WHERE statut IN ('RESERVED', 'ANNULED', 'ANNULED_BY_HOST', $unavailable 'CONFIRMED') $whereClient $whereDwelling ORDER BY id DESC");

        foreach ($reservations as $reservation) {
            $dwellingId = $reservation['dwelling_id'];
            $reservationId = $reservation['id'];
            $userClientId = $reservation['user_id'];

            $statut = $reservation['statut']; 
            $startDate = $reservation['start_date']; 
            $endDate = $reservation['end_date']; 
            
            $repository = $this->registry->getRepository(Dwelling::class);
            $dwellings = $repository->findOneBy(["id"=>$dwellingId]);
                if ($host) {
                    if ($dwellings->getUser()->getId() != $host_id) {
                        continue;
                    }
                }
                $id = $dwellings->getId();
                $title = $dwellings->getTitle();
                $userDwellingId = $dwellings->getUser()->getId();

                $userRep = $this->registry->getRepository(Users::class);
                $user = $userRep->findOneBy(["id"=>$userDwellingId]);

                $userDwellingFirstName = $user->getFirstName();
                $userDwellingLastName = $user->getLastName();
                $userDwellingEmail = $user->getEmail();
                
                $userDwellingIban = "";
                
                $userMetaRep = $this->registry->getRepository(UserMeta::class);
                $userMeta = $userMetaRep->findAll();
                foreach ($userMeta as $meta) {
                    if ($meta->getUser()->getId() == $userDwellingId && $meta->getField()=="_host_iban" ) {
                        $userDwellingIban = $meta->getValue();
                    }
                }
                $city = $dwellings->getCity();
                $usersData = $this->users->showUsers("*", "WHERE id=$userClientId");
                foreach ($usersData as $element) {
                    $firstName = $element['first_name'];
                    $lastName = $element['last_name'];
                    $email = $element['email'];
                    $dwellingMeta = $this->reservationMeta->showReservationMeta($reservationId);
                    $total = "";
                    $subTotal = "";
                    $tax = "";
                    $paymentIban = "";
                    $paymentDate = "";
                    $paymentStatut = "";
                    if ($dwellingMeta) {
                        foreach ($dwellingMeta as $meta) {
                            switch ($meta['field']) {
                                case '_price_of_reservation':
                                    $total = $meta['value'];
                                    break;
                                case '_sub_total_price':
                                    $subTotal = $meta['value'];
                                    break;
                                case '_tax_service':
                                    $tax = $meta['value'];
                                    break;
                                case '_payment_iban':
                                    $paymentIban = $meta['value'];
                                    break;
                                case '_payment_date':
                                    $paymentDate = $meta['value'];
                                    break;
                                case '_payment_statut':
                                    $paymentStatut = $meta['value'];
                                    break;
                            }
                        }
                    }
                        $zone = new \DateTimeZone('Europe/Paris');
                        $toDay = new DateTimeImmutable('now', $zone);
                        $time = strtotime($toDay->format('Y-m-d')) - strtotime($startDate);
                        $btn = false;
                        if ($time<0) {
                            $btn = true;
                        }
                    $userData = [$firstName, $lastName, $email, $id, $title, $startDate, $endDate, $statut, $reservationId, $total, $subTotal, $tax, $city, $userDwellingId, $userClientId, $btn, $paymentIban, $paymentStatut, $paymentDate, $userDwellingFirstName, $userDwellingLastName, $userDwellingEmail, $userDwellingIban];
                    array_push($finalDataHistorical, $userData);
                }
            
        }
        return $finalDataHistorical;
        } catch (\Throwable $th) {
        }
    }

//    /**
//     * @return Reservation[] Returns an array of Reservation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reservation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
