<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class FavoriteController extends AbstractController
{
    #[Route('/habitations/favoris', name: 'dwelling_favorite')]
    public function favorite(ReservationRepository $reservations, Calendar $calendarDate, ManagerRegistry $doctrine, Security $security, PaginatorInterface $paginator, Request $request): Response
    {
        $auth = $security->getUser();
        if (!$auth) {
            return $this->redirectToRoute('app_index');
        }
        if (isset($_POST['favorite_delete'])) {
            $id = $_POST['favorite_id'];
            $userRep = $doctrine->getRepository(Users::class);
            $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);

            $postsRep = $doctrine->getRepository(Posts::class);
            $posts = $postsRep->findBy(['dwelling' => $id, 'type' => 'FAVORITE']);
            

            if ($posts) {
                foreach ($posts as $post) {
                    if ($post->getUser()->getId() == $user->getId()) {
                        $em = $doctrine->getManager();
                        $em->remove($post);
                        $em->flush();
                        $this->addFlash("success","L'habitat mis en favoris a bien été supprimé");
                        return $this->redirectToRoute("dwelling_favorite");
                    } else {
                        $this->addFlash("error","Une erreur est survenue, veuillez réessayer");
                        return $this->redirectToRoute("dwelling_favorite");
                    }
                }
            } else {
                $this->addFlash("error","Une erreur est survenue, veuillez réessayer");
                return $this->redirectToRoute("dwelling_favorite");
            }
        }
        $userRep = $doctrine->getRepository(Users::class);
        $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);

        $postsRep = $doctrine->getRepository(Posts::class);
        $posts = $postsRep->findBy(['user' => $user, 'type' => 'FAVORITE']);
        
        $final = [];
        if ($posts) {
            foreach ($posts as $post) {
                $dwellingRep = $doctrine->getRepository(Dwelling::class);
                $dwelling = $dwellingRep->find($post->getDwelling()->getId());
                array_push($final, $dwelling);
            }
        }
        $message = "";
        if (count($final) <= 0) {
            $message = "Vous n'avez pas d'habitations favorites";
        } else {
            $final = $paginator->paginate(
                $final,
                $request->query->getInt('page', 1),
                5);
        }


        return $this->render('inc/pages/users/favorite.html.twig', [
            'datas' => $final,
            'message' => $message
        ]);
    }


    #[Route('/habitations/signal', name: 'dwelling_signal')]
    public function signal(ReservationRepository $reservations, Calendar $calendarDate, ManagerRegistry $doctrine, Security $security, PaginatorInterface $paginator, Request $request): Response
    {
        $auth = $security->getUser();
        if (!$auth) {
            return $this->redirectToRoute('app_index');
        }
        $userRep = $doctrine->getRepository(Users::class);
        $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);

        $postsRep = $doctrine->getRepository(Posts::class);
        $posts = $postsRep->findBy(['user' => $user, 'type' => 'SIGNALEMENT']);
        
        $final = [];
        if ($posts) {
            foreach ($posts as $post) {
                $dwellingRep = $doctrine->getRepository(Dwelling::class);
                $dwelling = $dwellingRep->find($post->getDwelling()->getId());
                array_push($final, $dwelling);
            }
        }
        $message = "";
        if (count($final) <= 0) {
            $message = "Vous n'avez pas d'habitations favorites";
        } else {
            $final = $paginator->paginate(
                $final,
                $request->query->getInt('page', 1),
                5);
        }


        return $this->render('inc/pages/users/favorite.html.twig', [
            'datas' => $final,
            'message' => $message
        ]);
    }


}

