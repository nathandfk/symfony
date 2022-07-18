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
            $cleanLiness = !empty($cleanLiness) ? round(array_sum($cleanLiness) / count($cleanLiness), 2) : [];
            $precision = !empty($precision) ? round(array_sum($precision) / count($precision), 2) : [];
            $communication = !empty($communication) ? round(array_sum($communication) / count($communication), 2) : [];
            $_location = !empty($_location) ? round(array_sum($_location) / count($_location), 2) : [];
            $arrival = !empty($arrival) ? round(array_sum($arrival) / count($arrival), 2) : [];
            $value_for_money = !empty($value_for_money) ? round(array_sum($value_for_money) / count($value_for_money), 2) : [];

            // End Notes


            /* Reservation Date */
            $reservationDate =  $id != 0 ? $this->reservation->showReservation("*", "WHERE dwelling_id = $id AND statut='RESERVED' OR statut='CONFIRMED'") : [];

            /*End Reservation Date */
            $totalLikes = round((intval($cleanLiness)+intval($precision)+intval($communication)
            +intval($_location)+intval($arrival)+intval($value_for_money))/6, 2);

            !empty($resultDwellingMeta) ? $dwellingMeta = $resultDwellingMeta : $dwellingMeta = "";
            !empty($location) ? $country = $location->getNameFr() : $country = "";
            !empty($countComments) ? $nbComments = $countComments[0] : $nbComments = "";
            !empty($comments) ? $comments = $comments : $comments = "";
            $nbLikes = !empty($totalLikes) ? $totalLikes : "";
            !empty($users) ? $users = $users : $users = "";

            $dwellings = [$dwelling, $dwellingMeta, $country, $nbComments, $dataComments, $nbLikes, $users, $cleanLiness, $precision, $communication, $_location, $arrival, $value_for_money, $reservationDate, $type->getDescription(), $equipmentsValue]; //15
            array_push($finalResult, $dwellings);
        }

        return $finalResult;
    }

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
