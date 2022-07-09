<?php

namespace App\Repository;

use App\Entity\Dwelling;
use App\Entity\Reservation;
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


    public function historical(bool $client = true, int $client_id = 0, bool $host = false, int $host_id = 0, int $searchByDwelling = 0, $progressing = false, int $limit = 10, $search= "")
    {
        $finalDataHistorical = [];
        $whereClient = $client_id > 0 ? "AND user_id=$client_id" : "";
        $whereDwelling = $searchByDwelling > 0 ? "AND id=$searchByDwelling" : "";
        $progressing = $progressing == true ? "'IN_PROGRESS'," : "";
        $reservations = $this->showReservation("*", "WHERE statut IN ('RESERVED', 'ANNULED', 'ANNULED_BY_HOST', $progressing 'CONFIRMED') $whereClient $whereDwelling ORDER BY id DESC LIMIT $limit");
        foreach ($reservations as $reservation) {
            $dwellingId = $reservation['dwelling_id'];
            $reservationId = $reservation['id'];
            $userClientId = $reservation['user_id'];

            $statut = $reservation['statut']; 
            $startDate = $reservation['start_date']; 
            $endDate = $reservation['end_date']; 
            
            $repository = $this->registry->getRepository(Dwelling::class);
            $dwellings = $repository->findBy(["id"=>$dwellingId]);
            foreach ($dwellings as $dwelling) {
                if ($host) {
                    if ($dwelling->getUser()->getId() != $host_id) {
                        continue;
                    }
                }
                $id = $dwelling->getId();
                $title = $dwelling->getTitle();
                $userDwellingId = $dwelling->getUser()->getId();
                $city = $dwelling->getCity();
                $usersData = $this->users->showUsers("*", "WHERE id=$userClientId");
                foreach ($usersData as $element) {
                    $firstName = $element['first_name'];
                    $lastName = $element['last_name'];
                    $email = $element['email'];
                    $dwellingMeta = $this->reservationMeta->showReservationMeta($reservationId);
                    $total = "";
                    $subTotal = "";
                    $tax = "";
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
                            }
                        }
                    }
                    $userData = [$firstName, $lastName, $email, $id, $title, $startDate, $endDate, $statut, $reservationId, $total, $subTotal, $tax, $city, $userDwellingId, $userClientId];
                    array_push($finalDataHistorical, $userData);
                }
            }
        }
        return $finalDataHistorical;
        // $userHost = $this->showUsers("*", "WHERE roles LIKE '%ROLE_HOST%'");
        // $user = $this->showUsers("*", "WHERE roles LIKE '%ROLE_HOST%'");
        // $finalData = [];
        // if ($userHost) {
        //     foreach ($userHost as $data) {
                
        //     }
        // }
        // $users = $this->showUsers("*", "");
        // if ($dwelling_host_id > 0) {
        //     $reservation = $this->showReservation("*", "WHERE dwelling_id='".$dwelling_host_id."' LIMIT $limit");
        // } else if ($client_id > 0 && $dwelling_host_id > 0){
        //     $reservation = $this->showReservation("*", "WHERE user_id='".$client_id."' OR dwelling_id='".$dwelling_host_id."' LIMIT $limit");
        // }
        // $finalDataReservation = [];
        // foreach ($reservation as $key) {
        //     $metaData = [];
        //     $reservation_id = $key["id"];
        //     $reservMeta = $this->reservationMeta->showReservationMeta($reservation_id, "*");
        //     foreach ($reservMeta as $meta) {
        //         $data = [$meta['field'], $meta['value']];
        //         array_push($metaData, $data);
        //     }
        //     array_push($finalDataReservation, [$key, $metaData]);
        // }
        // return $finalDataReservation;
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
