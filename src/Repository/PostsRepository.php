<?php

namespace App\Repository;

use App\Entity\Posts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Posts>
 *
 * @method Posts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Posts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Posts[]    findAll()
 * @method Posts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostsRepository extends ServiceEntityRepository
{
    private $post_meta;
    public function __construct(ManagerRegistry $registry, PostMetaRepository $pm)
    {
        parent::__construct($registry, Posts::class);
        $this->post_meta = $pm;
    }

    public function add(Posts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Posts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function showPosts(string $selector="*", string $where="")
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT $selector FROM posts p $where";
        
        $prepare = $conn->prepare($sql);
        $execute = $prepare->executeQuery();
        return $execute->fetchAllAssociative();
    }

    // public function showPost(bool $meta=false, $count= false, string $where='')
    // {
    //     $conn = $this->getEntityManager()->getConnection();
    //     $post_meta = $this->post_meta;

    //     // !is_null($type) ? $type="type='$type'": $type = null;
    //     // !is_null($dwelling_id) ? $dwelling_id="dwelling_id='$dwelling_id'": $dwelling_id = null;
    //     // !is_null($type) && !is_null($dwelling_id) ? $and= "AND" : $and = "";
    //     // !is_null($type) || !is_null($dwelling_id) ? $where= "WHERE" : $where = "";

    //     $count == true ? $show= "count(*) count" : $show = "*";
    //     $sql = "SELECT * FROM posts p $where";
    //     $meta==true ? $post_meta = $post_meta->showPostMeta('*', '') : $post_meta = null;
    //     $stmt = $conn->prepare($sql);
    //     $resultSet = $stmt->executeQuery();
        
    //     $resultSet->fetchAllAssociative();
    //     $results = $resultSet->fetchAllAssociative();
    //     $finalResult = [];
    //     foreach ($results as $value) {
    //         $id = $value->id;
    //         if ($count == false) {
    //             array_push($finalResult, $value);
    //         } else {
    //             if ($meta == false) {
    //                 array_push($finalResult, $value);
    //             } else {
    //                 foreach ($post_meta as $pm) {
    //                     if ($id == $pm->post_id) {
    //                         $setValue = [$value, $pm];
    //                         array_push($finalResult, $setValue);
    //                     }
    //                 }
    //             }
    //         }
    //     }

    //     return $finalResult;
    // }

    public function showDataPosts(bool $meta=false, string $selector = "*", string $where=""){
        $posts = $this->showPosts($selector, $where);
        $finalResult = [];
        foreach ($posts as $post) {
            $id = $post['id'];
            $post_meta = $this->post_meta->showPostMeta($id);
            !is_null($post_meta) && $meta == true ? $withMetaPosts = [$posts, $post_meta] : $withMetaPosts = [$posts, []];
            array_push($finalResult, $withMetaPosts); 
        }
        return $finalResult;
    }

//    /**
//     * @return Posts[] Returns an array of Posts objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Posts
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
