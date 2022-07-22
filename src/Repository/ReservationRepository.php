<?php

namespace App\Repository;

use App\Entity\Dwelling;
use App\Entity\Reservation;
use App\Entity\UserMeta;
use App\Entity\Users;
use DateTimeImmutable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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
    public function __construct(ManagerRegistry $registry, ReservationMetaRepository $reservationMeta, UsersRepository $users)
    {
        parent::__construct($registry, Reservation::class);
        $this->reservationMeta = $reservationMeta;
        $this->users = $users;
        $this->registry = $registry;
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
