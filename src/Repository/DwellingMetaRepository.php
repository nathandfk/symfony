<?php

namespace App\Repository;

use App\Entity\DwellingMeta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DwellingMeta>
 *
 * @method DwellingMeta|null find($id, $lockMode = null, $lockVersion = null)
 * @method DwellingMeta|null findOneBy(array $criteria, array $orderBy = null)
 * @method DwellingMeta[]    findAll()
 * @method DwellingMeta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DwellingMetaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DwellingMeta::class);
    }

    public function add(DwellingMeta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DwellingMeta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function showDwellingMeta(int $id, string $selector="*")
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT $selector FROM dwelling_meta dm WHERE dm.dwelling_id=$id";

        $prepare = $conn->prepare($sql);
        $execute = $prepare->executeQuery();
        
        return $execute->fetchAllAssociative();
    }

//    /**
//     * @return DwellingMeta[] Returns an array of DwellingMeta objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DwellingMeta
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
