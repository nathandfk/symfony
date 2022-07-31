<?php

namespace App\Repository;

use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\Users;
use DateTimeImmutable;
use DateTimeZone;
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
    private $registry;
    public function __construct(ManagerRegistry $registry, PostMetaRepository $pm)
    {
        parent::__construct($registry, Posts::class);
        $this->post_meta = $pm;
        $this->registry = $registry;
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
    
    public function notification($id = 0, $email, $salt) {
        $output = [["response" => "empty"]];
        if ($salt == "_Z34azertNCVI3Y65514-_ddezERTEETAZbn----qse321ghbd_-ghdsrza23436d___") {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $userRep = $this->registry->getRepository(Users::class);
                $user = $userRep->findOneBy(['email' => $email]);
                if ($user) {
                    if (in_array("ROLE_HOST", $user->getRoles())) {
                        if ($user->getDeletedAt() == null && $user->getStatut() == true) {  
                            $postsRep = $this->registry->getRepository(Posts::class);
                            $posts = $postsRep->findBy(['type' => "NOTIFICATION"]);
                            if ($posts) {
                                $output = [];
                                foreach ($posts as $post) {
                                    if (!empty($post->getAbstract())) {
                                        $ex = explode(",", $post->getDescription());
                                        if(!in_array($user->getId(), $ex, false)){
                                            $em = $this->registry->getManager();
                                            array_push($output, ["response" => "success", "message" => "notification", "id" => $post->getId(), "title" => $post->getTitle(), "abstract" => $post->getAbstract()]);
                                            $data = $post->getDescription().$user->getId().",";
                                            $post->setDescription($data);
                                            $em->persist($post);
                                            $em->flush();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return $output;
    }

    
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
}
