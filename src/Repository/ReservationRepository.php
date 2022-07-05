<?php

namespace App\Repository;

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

    public function __construct(ManagerRegistry $registry, ReservationMetaRepository $reservationMeta)
    {
        parent::__construct($registry, Reservation::class);
        $this->reservationMeta = $reservationMeta;
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


    public function historical(int $client_id, int $dwelling_host_id = 0, int $reservation_id = 0, int $offset = 0, int $limit = 10)
    {
        $limitData = "LIMIT $limit OFFSET $offset";
        
        $reservation = $this->showReservation("*", "WHERE user_id=".$client_id." $limitData");
        if ($dwelling_host_id > 0) {
            $reservation = $this->showReservation("*", "WHERE dwelling_id='".$dwelling_host_id."' $limitData");
        } else if ($client_id > 0 && $dwelling_host_id > 0){
            $reservation = $this->showReservation("*", "WHERE user_id='".$client_id."' OR dwelling_id='".$dwelling_host_id."' $limitData");
        }
        $finalDataReservation = [];
        foreach ($reservation as $key) {
            $metaData = [];
            $reservation_id = $key["id"];
            $reservMeta = $this->reservationMeta->showReservationMeta($reservation_id, "*");
            foreach ($reservMeta as $meta) {
                $data = [$meta['field'], $meta['value']];
                array_push($metaData, $data);
            }
            array_push($finalDataReservation, [$key, $metaData]);
        }
        return $finalDataReservation;
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
