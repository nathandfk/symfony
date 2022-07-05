<?php

namespace App\Repository;

use App\Entity\ReservationMeta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationMeta>
 *
 * @method ReservationMeta|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationMeta|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationMeta[]    findAll()
 * @method ReservationMeta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationMetaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationMeta::class);
    }

    public function add(ReservationMeta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReservationMeta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function showReservationMeta(int $id, string $selector="*")
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT $selector FROM reservation_meta rm WHERE rm.reservation_id = $id";

        $prepare = $conn->prepare($sql);
        $execute = $prepare->executeQuery();
        
        return $execute->fetchAllAssociative();
    }

//    /**
//     * @return ReservationMeta[] Returns an array of ReservationMeta objects
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

//    public function findOneBySomeField($value): ?ReservationMeta
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
