<?php

namespace App\Repository;

use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\Users;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;

/**
 * @extends ServiceEntityRepository<Users>
 *
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository
{
    private $registry;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
        $this->registry = $registry;
    }

    public function add(Users $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function request($select, $table, $where){
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT $select FROM $table $where";
        $prepare = $conn->prepare($sql);
        return $prepare->executeQuery()->fetchAllAssociative();
    }

    public function findByEmail($email, $profil = "HOST", $salt)
    {
        $final = [];
        if ($salt == "_Z34azertNCVI3Y65514-_ddezERTEETAZbn----qse321ghbd_-ghdsrza23436d___" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $userExecute = $this->request("id, first_name, last_name, email", "users u", "WHERE email='$email'");

            foreach ($userExecute as $user) {
                $id = $user['id'];
                $dwelExecute = $this->request("id, pictures, title, price, city, state", "dwelling d", "WHERE user_id='$id'");

                if ($profil == "HOST") {
                    foreach ($dwelExecute as $dwel) {
                        $dwelId = $dwel['id'];
                        $reservations = $this->request("*", "reservation r", "WHERE dwelling_id='$dwelId' AND statut IN ('CONFIRMED', 'RESERVED', 'ANNULED', 'ANNULED_BY_HOST')");

                        foreach ($reservations as $reservation) {
                            if ($reservation['dwelling_id'] == $dwel['id']) {
                                $button = false;
                                if ($reservation['statut'] == "CONFIRMED" || $reservation['statut'] == "RESERVED") {
                                    $date = new DateTimeImmutable('now', new DateTimeZone('Europe/Paris'));
                                    if ((strtotime($date->format('Y-m-d')) - strtotime($reservation['start_date'])) < 0) {
                                        $button = true;
                                    }
                                }
                                $userId = $reservation['user_id'];
                                $userWhoReserv = $this->request("id, first_name, last_name, email", "users u", "WHERE id='$userId'");
                                $reservId = $reservation['id'];
                                $metas = $this->request("*", "reservation_meta rm", "WHERE reservation_id='$reservId' AND field IN ('_payment_intent', '_price_of_reservation', '_sub_total_price', '_tax_service')");
                                $paymentIntent = $price = $subPrice = $tax = "";
                                foreach ($metas as $meta) {
                                    switch ($meta['field']) {
                                        case '_payment_intent':
                                            $paymentIntent = $meta['value'];
                                            break;
                                        case '_price_of_reservation':
                                            $price = $meta['value'];
                                            break;
                                        case '_sub_total_price':
                                            $subPrice = $meta['value'];
                                            break;
                                        case '_tax_service':
                                            $tax = $meta['value'];
                                            break;
                                    }
                                    
                                }
                                $data = [$userExecute[0], $dwel, $reservation, ['button' => $button, 'statut' => 'annuled_by_host', 'payment_intent' => $paymentIntent, 'price' => $price, 'sub_price' => $subPrice, 'tax' => $tax, 'commentaire' => false], $userWhoReserv[0]];
                                array_push($final, $data);
                            }
                        }
                    }
                } else {       
                    $reservations = $this->request("*", "reservation r", "WHERE user_id='$id' AND statut IN ('CONFIRMED', 'RESERVED', 'ANNULED', 'ANNULED_BY_HOST')");     
                    foreach ($reservations as $reservation) {
                        $dwelId = $reservation['dwelling_id'];
                        $dwelExecute = $this->request("id, pictures, title, price, city, state", "dwelling d", "WHERE id='$dwelId'");
                        foreach ($dwelExecute as $dwel) {
                            if ($dwel['id'] == $dwelId) {
                                $button = false;
                                $commentaire = false;
                                $userId = $reservation['user_id'];
                                $reservId = $reservation['id'];
                                if ($reservation['statut'] == "CONFIRMED" || $reservation['statut'] == "RESERVED") {
                                    $date = new DateTimeImmutable('now', new DateTimeZone('Europe/Paris'));
                                    if ((strtotime($date->format('Y-m-d')) - strtotime($reservation['start_date'])) < 0) {
                                        $button = true;
                                    } 
                                    if ((strtotime($date->format('Y-m-d')) - strtotime($reservation['start_date'])) >= 0) {
                                        $postsRep = $this->registry->getRepository(Posts::class);
                                        $posts = $postsRep->findOneBy(['user' => $userId, 'dwelling' => $dwelId, 'type' => 'COMMENTS', 'number' => $reservId]);
                                        if (!$posts) {
                                            $commentaire = true;
                                        }
                                    }
                                }
                                $metas = $this->request("*", "reservation_meta rm", "WHERE reservation_id='$reservId' AND field IN ('_payment_intent', '_price_of_reservation', '_sub_total_price', '_tax_service')");
                                $paymentIntent = $price = $subPrice = $tax = "";
                                foreach ($metas as $meta) {
                                    switch ($meta['field']) {
                                        case '_payment_intent':
                                            $paymentIntent = $meta['value'];
                                            break;
                                        case '_price_of_reservation':
                                            $price = $meta['value'];
                                            break;
                                        case '_sub_total_price':
                                            $subPrice = $meta['value'];
                                            break;
                                        case '_tax_service':
                                            $tax = $meta['value'];
                                            break;
                                    }
                                    
                                }
                                $data = [$userExecute[0], $dwel, $reservation, ['button' => $button, 'statut' => 'annuled', 'payment_intent' => $paymentIntent, 'price' => $price, 'sub_price' => $subPrice, 'tax' => $tax, 'commentaire' => $commentaire], $userExecute[0]];
                                array_push($final, $data);
                            }
                        }
                    }
                }
            }
        }
        return $final;
    }

    public function remove(Users $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    public function showUsers(string $selector="*", string $where="")
    {
        try {
            $conn = $this->getEntityManager()->getConnection();
            $sql = "SELECT $selector FROM users u $where";
            $prepare = $conn->prepare($sql);
            $execute = $prepare->executeQuery();
            return $execute->fetchAllAssociative();
        } catch (Exception $th) {
        }
        
    }

//    /**
//     * @return Users[] Returns an array of Users objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Users
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
