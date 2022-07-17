<?php

namespace App\Repository;

use App\Entity\Country;
use App\Entity\Dwelling;
use App\Entity\Posts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dwelling>
 *
 * @method Dwelling|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dwelling|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dwelling[]    findAll()
 * @method Dwelling[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DwellingRepository extends ServiceEntityRepository
{
    private $country;
    private $posts;
    private $post_meta;
    private $reservation;
    private $dwelling_meta;
    private $users;
    private $doctrine;
    public function __construct(ManagerRegistry $registry, CountryRepository $country, PostsRepository $posts, ReservationRepository $reservation, DwellingMetaRepository $dwelling_meta, UsersRepository $users, PostMetaRepository $pm)
    {
        parent::__construct($registry, Dwelling::class);
        $this->country = $country;
        $this->posts = $posts;
        $this->reservation = $reservation;
        $this->dwelling_meta = $dwelling_meta;
        $this->users = $users;
        $this->post_meta = $pm;
        $this->doctrine = $registry;
    }

    public function add(Dwelling $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dwelling $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function showDwellings(string $selector="*", string $where="")
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT $selector FROM dwelling d $where";
        $prepare = $conn->prepare($sql);
        $execute = $prepare->executeQuery();
        
        return $execute->fetchAllAssociative();
    }

    public function showDataDwellings(int $id = null, string $start_date = null, string $end_date = null, string $place = null, int $maxPeople = null, $limitPrice = null, int $filterType = null, bool $orderTitle = null)
    {
        if (!is_null($place)) {
            $ex = explode(", ", $place);
            if (count($ex) > 1) {
                $place = $ex[0];
            }
        }
        // $where = "";
        // $where = !is_null($id) && !is_null($place) ? "WHERE id = $id AND city LIKE '%$place%'" : $where;
        // $where = !is_null($place) && is_null($id) ? "WHERE city LIKE '%$place%'" : $where;
        // $where = is_null($place) && !is_null($id) ? "WHERE id = $id" : $where;
        // !is_null($start_date) && !is_null($end_date) ? $date = "start_date>='$start_date' AND end_date<='$end_date'" : $date = "";

        $where = !is_null($id) || !is_null($start_date) || !is_null($id) || !is_null($end_date)
        || !is_null($place) || !is_null($maxPeople) || !is_null($limitPrice)
        || !is_null($filterType) ? "WHERE " : "";

        $element = "";

        $element .= !is_null($id) ? "id = $id" : "";

        $element .= !is_null($id) && !is_null($place) ? " AND city LIKE '%$place%' " : "";
        $element .= !is_null($place) && is_null($id) ? "city LIKE '%$place%'" : "";

        $element .= !is_null($id) && !is_null($place) && !is_null($limitPrice) ? " AND ".$limitPrice." " : "";
        $element .= is_null($id) && is_null($place) && !is_null($limitPrice) ? $limitPrice." " : "";
        $element .= (is_null($id) || is_null($place)) && !is_null($limitPrice) ? " AND ".$limitPrice." " : "";

        $element .= !is_null($id) && !is_null($place) && !is_null($limitPrice) && !is_null($filterType) ? " AND `type_id`=".$filterType." " : "";
        $element .= is_null($id) && is_null($place) && is_null($limitPrice) && !is_null($filterType) ? " `type_id`=".$filterType : "";
        $element .= (is_null($id) || is_null($place) || is_null($limitPrice)) && !is_null($filterType) ? " AND `type_id`=".$filterType." " : "";

        if (!is_null($orderTitle) && is_bool($orderTitle)) {
        $order = $orderTitle ? "ASC" : "DESC";
        $element .= !is_null($id) && !is_null($place) && !is_null($limitPrice) && !is_null($filterType) && !is_null($orderTitle) ? " ORDER BY title $order " : "";
        $element .= (is_null($id) || is_null($place) || is_null($limitPrice) || is_null($filterType)) && !is_null($orderTitle) ? " ORDER BY title $order " : "";
        $element .= is_null($id) && is_null($place) && is_null($limitPrice) && is_null($filterType) && !is_null($orderTitle) ? " ORDER BY title $order " : "";
        }

        $resultDwellings = $this->showDwellings("*", $where.$element);
        if (!is_null($start_date) && !is_null($end_date)) {
            $range = $this->date_range("$start_date", "$end_date");
            $date = "";
            foreach ($range as $value) {
                $date .= "start_date = '$value' OR end_date = '$value' OR ";
            }
            $date = substr($date, 0, -4);
        } else {
            $date = "";
        }

        $finalResult = [];
        foreach ($resultDwellings as $dwelling) {
            $dwelRep = $this->find($dwelling['id']);

            if ($dwelRep->getDeletedAt() != null || $dwelRep->isActivate() == false) {
                continue;
            }
            $equipmentsValue = [];
            $postRep = $this->doctrine->getRepository(Posts::class);
            $type = $postRep->find($dwelRep->getType());

            foreach ($dwelRep->getEquipments() as $id) {
                $equipment = $postRep->find($id);
                array_push($equipmentsValue, $equipment->getDescription());
            }

            $id = $dwelling['id'];
            $user_id = $dwelRep->getUser()->getId();
            $users = $this->users->showUsers("first_name, last_name, email, roles, statut, host, deleted_at", "WHERE id= $user_id");

            !empty($date) ? $checkReservation = $this->reservation->showReservation("*", 'WHERE dwelling_id='.$id.' AND '.$date) : $checkReservation = false;
            if ($checkReservation) {
                continue;
            } else if ($users[0]['host'] == "PRIVATE" || $users[0]['host'] == "CLOSED" || $users[0]['deleted_at'] != null) {
                continue;
            }
            $resultDwellingMeta = $this->dwelling_meta->showDwellingMeta($id);
            if ($maxPeople > 0) {
                $value = 0;
                foreach ($resultDwellingMeta as $key) {
                    if ($key['field'] == "_max_people") {
                        $value = $key['value'];
                    }
                }
                if ($value < $maxPeople) {
                    continue;
                }
            }
            $location = $this->doctrine->getRepository(Country::class)->find($dwelRep->getCountry());

            $countComments = $this->posts->showPosts("count(*) count", 'WHERE dwelling_id='.$id.' AND type="COMMENTS"');
            $comments = $this->posts->showPosts("user_id, dwelling_id, type, description, added_at", 'WHERE dwelling_id='.$id.' AND type="COMMENTS"');
            $dataComments = [];
            if (!empty($comments)) {
                foreach ($comments as $comment) {
                    if ($comment['dwelling_id'] == $id) {
                        $usersComment = $this->users->showUsers("first_name, last_name, email", "WHERE id=".$comment['user_id']);
                        
                        $allComments = [$comment, $usersComment[0]];
                        array_push($dataComments, $allComments);
                    }
                }
            }
            !empty($dataComments) ? $dataComments = $dataComments : $dataComments = [];
            $countLikes = $this->posts->showPosts("count(*) count", 'WHERE dwelling_id='.$id.' AND type="LIKES"');
            $sumLikes = $this->posts->showPosts("SUM(number) note", 'WHERE dwelling_id='.$id.' AND type="LIKES"');
            $likes = $this->posts->showPosts("*", 'WHERE dwelling_id='.$id.' AND type="LIKES"');


            // Notes
            $cleanLiness = [];
            $precision = [];
            $communication = [];
            $_location = [];
            $arrival = [];
            $value_for_money = [];
            foreach ($likes as $like) {
                $postMetas = $this->post_meta->showPostMeta($like['id']);
                if (!empty($postMetas)) {
                    foreach ($postMetas as $pm) {
                        switch ($pm['field']) {
                            case '_cleanliness':
                                $value = intval($pm['value']);
                                array_push($cleanLiness, $value);
                                break;
                            
                            case '_precision':
                                $value = intval($pm['value']);
                                array_push($precision, $value);
                                break;

                            case '_communication':
                                $value = intval($pm['value']);
                                array_push($communication, $value);
                                break;
                            
                            case '_location':
                                $value = intval($pm['value']);
                                array_push($_location, $value);
                                break;

                            case '_arrival':
                                $value = intval($pm['value']);
                                array_push($arrival, $value);
                                break;
                            
                            case '_value_for_money':
                                $value = intval($pm['value']);
                                array_push($value_for_money, $value);
                                break;
                        }
                    }
                }
            }
            !empty($cleanLiness) ? $cleanLiness = array_sum($cleanLiness) / count($cleanLiness) : $cleanLiness = [];
            !empty($precision) ? $precision = array_sum($precision) / count($precision) : $precision = [];
            !empty($communication) ? $communication = array_sum($communication) / count($communication) : $communication = [];
            !empty($_location) ? $_location = array_sum($_location) / count($_location) : $_location = [];
            !empty($arrival) ? $arrival = array_sum($arrival) / count($arrival) : $arrival = [];
            !empty($value_for_money) ? $value_for_money = array_sum($value_for_money) / count($value_for_money) : $value_for_money = [];

            // End Notes


            /* Reservation Date */
            $reservationDate =  $id != 0 ? $this->reservation->showReservation("*", "WHERE dwelling_id = $id AND statut='RESERVED' OR statut='CONFIRMED'") : [];

            /*End Reservation Date */


            !empty($countLikes) && !empty($sumLikes) && $countLikes[0]["count"] != 0 ? $totalLikes = intval($sumLikes[0]["note"])/intval($countLikes[0]["count"]) : $totalLikes = "";


            !empty($resultDwellingMeta) ? $dwellingMeta = $resultDwellingMeta : $dwellingMeta = "";
            !empty($location) ? $country = $location->getNameFr() : $country = "";
            !empty($countComments) ? $nbComments = $countComments[0] : $nbComments = "";
            !empty($comments) ? $comments = $comments : $comments = "";
            !empty($totalLikes) ? $nbLikes = $totalLikes : $nbLikes = "";
            !empty($users) ? $users = $users : $users = "";

            $dwellings = [$dwelling, $dwellingMeta, $country, $nbComments, $dataComments, $nbLikes, $users, $cleanLiness, $precision, $communication, $_location, $arrival, $value_for_money, $reservationDate, $type->getDescription(), $equipmentsValue]; //15
            array_push($finalResult, $dwellings);
        }

        return $finalResult;
    }

    // public function showDwellings(string $id=null, string $start_date=null, string $end_date=null, $count = false)
    // {
    //     !is_null($id) ? $id = "id = '$id'" : $id = null;
    //     !is_null($start_date) && !is_null($end_date) ? $date = "start_date>='$start_date' AND end_date<='$end_date'" : $date = null;
    //     !is_null($id) ? $where = "WHERE" : $where = null;
        
    //     $conn = $this->getEntityManager()->getConnection();
    //     $sql1 = "SELECT * FROM dwelling d $where $id";
        
    //     $prepare1 = $conn->prepare($sql1);
    //     $execute1 = $prepare1->executeQuery();
    //     $place = $this->city;
    //     $posts = $this->posts;
    //     $sql2 = 'SELECT * FROM dwelling_meta';
    //     $prepare2 = $conn->prepare($sql2);
    //     $execute2 = $prepare2->executeQuery();

    //     if (!is_null($start_date) && !is_null($end_date) ) {
    //         $range = $this->date_range("$start_date", "$end_date");
    //         $date = "";
    //         foreach ($range as $value) {
    //             $date .= "start_date = '$value' OR end_date = '$value' OR ";
    //         }
    //         $date = substr($date, 0, -4);
    //     } else {
    //         $date = "";
    //     }
    //     $sql3 = "SELECT * FROM reservation WHERE $date";
        
    //     $prepare3 = $conn->prepare($sql3);
    //     $execute3 = $prepare3->executeQuery();

    //     $result1 = $execute1->fetchAllAssociative();
    //     $result2 = $execute2->fetchAllAssociative();
    //     $result3 = $execute3->fetchAllAssociative();

    //     $finalResult = [];
    //     foreach ($result1 as $value1) {
    //         $id = $value1['id'];
    //         if ($result3) {
    //         }
    //         $city_id = $value1['city_id'];
    //         foreach ($result2 as $value2) {
    //             if ($value2['dwelling_id'] ==  $id) {
    //                 $clear = "";
    //                 foreach ($result3 as $clearId) {
    //                     if($clearId['dwelling_id'] == $id) {
    //                         $clear = $id;
    //                     }
    //                 }
    //                 if ($clear == $id) {
    //                     continue;
    //                 } else {
    //                     $cities = $place->showAllPlace($city_id);
    //                     $likes = $posts->showPosts(false, false, "WHERE type='LIKES' AND dwelling_id=$id");
    //                     var_dump($likes);
    //                     $countLikes = $posts->showPosts(false, true, "WHERE type='LIKES' AND dwelling_id=$id");
    //                     count($likes) > 0 ? $likes = $likes[0]["number"] : $likes = 0;
    //                     count($countLikes) > 0 ? $countLikes = $countLikes[0]['count'] : $countLikes = 0;
                        
    //                     $likes != 0 ? $totalLikes = $likes/$countLikes : $totalLikes = '';
                        
    //                     $comments = $posts->showPosts(false, false, "WHERE type='COMMENTS' AND dwelling_id=$id");
    //                     $countComments = $posts->showPosts(false, true, "WHERE type='COMMENTS' AND dwelling_id=$id");
    //                     $wrapperValue = [$value1, $value2];
    //                     foreach ($cities as $city) {
    //                         array_push($wrapperValue, $city);
    //                     }
    //                     array_push($wrapperValue, $comments);
    //                     array_push($wrapperValue, $countComments[0]);
    //                     array_push($wrapperValue, $totalLikes);
    //                     array_push($finalResult, $wrapperValue);

    //                 }
    //             }
    //         }
    //     }
    //     return $finalResult;
    // }
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

//    /**
//     * @return Dwelling[] Returns an array of Dwelling objects
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

//    public function findOneBySomeField($value): ?Dwelling
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
