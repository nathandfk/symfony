<?php

namespace App\Controller;

use App\Entity\Dwelling;
use App\Entity\PostMeta;
use App\Entity\Posts;
use App\Entity\Users;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class LikesCommentsController extends AbstractController
{

    // Insertion d'un like client
    #[Route('/product/likes', name: 'likes')]
    public function likes(ManagerRegistry $doctrine, Security $security, ReservationRepository $reservRep)
    {
        // Récupération des données de l'utilisateur authentifié
        $auth = $security->getUser();

        // Récupération des données JSON reçues
        $data = json_decode(file_get_contents('php://input'), true);

        // Vérification des données et redirection sur la page d'accueil si la variable est vide
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }

        // Initialisation du variable de réponse en format JSON
        $output = '{"response":"error", "message":"", "icon":"fas fa-exclamation"}';

        // Vérifions si l'utilisateur est connecté
        if ($auth) {

            $em = $doctrine->getManager();

            // Récupération des données d'utilisateur à travers son adresse mail 
            $userRep = $doctrine->getRepository(Users::class);
            $userData = $userRep->findOneBy(["email" => $auth->getUserIdentifier()]);

            $userId = $userData->getId();
            $dwellingId = $data['_dwelling'];
            
            // Récupération des données de réservation
            $reservation = $reservRep->showReservation("*", "WHERE user_id=$userId AND dwelling_id=$dwellingId AND statut IN ('CONFIRMED')");


            // Récupération des données d'une habitation par rapport à son identifiant
            $dwelRep = $doctrine->getRepository(Dwelling::class);
            $dwelData = $dwelRep->find($dwellingId);

            $postsRep = $doctrine->getRepository(Posts::class);
            if ($reservation && $dwelData) {
                $postsData = $postsRep->findBy(['user' => $userId, 'dwelling' => $dwellingId, 'number' => $reservation[0]['id'], 'type' => 'LIKES'], ["id" => "DESC"], 1);

                // Vérifions si l'utilisateur a déjà laisser des appréciations sur ce logement avec la même réservation
                if (!$postsData) {
                $datas = [
                    '_cleanliness' => $data['_cleanliness'],
                    '_precision' => $data['_precision'],
                    '_communication' => $data['_communication'],
                    '_location' => $data['_location'],
                    '_arrival' => $data['_arrival'],
                    '_value_for_money' => $data['_value_for_money'],
                ];
                foreach ($datas as $key => $value) {
                    if (empty($value)) {
                        return new JsonResponse('{"response":"error", "message":"Vous n\'avez pas noté tous les critères demandés", "icon":"fas fa-exclamation"}');
                    } else if ($value > 5 || $value < 0) {
                        return new JsonResponse('{"response":"error", "message":"Une erreure est survenue, merci de recommencer après avoir actualiser votre page.", "icon":"fas fa-exclamation"}');
                    }
                }
                
                // Insertion des données de Likes dans la table Posts
                $posts = new Posts();
                $posts->setUser($userData);
                $posts->setDwelling($dwelData);
                $posts->setType('LIKES');
                $posts->setDescription('');
                $posts->setNumber($reservation[0]['id']);
                $posts->setTitle('Notes clients après ou pendant le séjour');
                $em->persist($posts);
                $em->flush();


                // Insertion des métas données de Likes récemment insérées dans la table Posts
                foreach ($datas as $key => $value) {
                    $postRep = $doctrine->getRepository(Posts::class);
                    $postData = $postRep->findBy(['type'=>'LIKES'], ['id'=>'DESC'], 1);
                    if (!$postData) {
                        return new JsonResponse('{"response":"error", "message":"Une erreure est survenue, merci de recommencer après avoir actualiser votre page.", "icon":"fas fa-exclamation"}');
                    }
                    $postMeta = new PostMeta();
                    $postMeta->setPost($postData[0]);
                    $postMeta->setField($key);
                    $postMeta->setValue($value);
                    $em->persist($postMeta);
                    $em->flush();
                }

                // Données de la réponse JSON
                $output = '{"response":"success", "message":"Vos notes ont bien été envoyé", "icon":"fas fa-check"}';
                } else {
                    $output = '{"response":"error", "message":"Un commentaire avec la même réservation que vous avez déjà faite existe déjà.", "icon":"fas fa-exclamation"}';
                }
            } else {
                $output = '{"response":"error", "message":"Un problème est survenu, il est possible que vous n\'ayez jamais réservé cet habitat avec ce compte.", "icon":"fas fa-exclamation"}';
            }
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);

    }


    // Insertion d'un commentaire client
    #[Route('/product/comments', name: 'comments')]
    public function comments(ManagerRegistry $doctrine, Security $security, ReservationRepository $reservRep)
    {
        // Récupération des données de l'utilisateur authentifié
        $auth = $security->getUser();

        // Récupération des données JSON reçues
        $data = json_decode(file_get_contents('php://input'), true);

        // Vérification des données et redirection sur la page d'accueil si la variable est vide
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }

        // Initialisation du variable de réponse en format JSON
        $output = '{"response":"error", "message":"", "icon":"fas fa-exclamation"}';

        // Vérifions si l'utilisateur est connecté
        if ($auth) {
            $em = $doctrine->getManager();

            // Récupération des données d'utilisateur à travers son adresse mail 
            $userRep = $doctrine->getRepository(Users::class);
            $userData = $userRep->findOneBy(["email" => $auth->getUserIdentifier()]);

            $userId = $userData->getId();
            $dwellingId = $data['_dwelling'];
            
            // Données de réservations
            $reservation = $reservRep->showReservation("*", "WHERE user_id=$userId AND dwelling_id=$dwellingId AND statut IN ('CONFIRMED')");

            $dwelRep = $doctrine->getRepository(Dwelling::class);
            $dwelData = $dwelRep->find($dwellingId);

            $postsRep = $doctrine->getRepository(Posts::class);

            if ($reservation && $dwelData) {
                // Vérifions si l'utilisateur a déjà laisser un commentaire sur ce logement avec la même réservation
                $postsData = $postsRep->findBy(['user' => $userId, 'dwelling' => $dwellingId, 'number' => $reservation[0]['id'], 'type' => 'COMMENTS'], ["id" => "DESC"], 1);
                if (!$postsData) {
                    if (empty($data['comments_text'])) {
                        return new JsonResponse('{"response":"error", "message":"Le champ de saisi est vide.", "icon":"fas fa-exclamation"}');
                    }
                    // Insertion des données de commentaires dans la table Posts
                    $posts = new Posts();
                    $posts->setUser($userData);
                    $posts->setDwelling($dwelData);
                    $posts->setType('COMMENTS');
                    $posts->setStatut('PRIVATE');
                    $posts->setNumber($reservation[0]['id']);
                    $posts->setDescription($data['comments_text']);
                    $posts->setTitle('Commentaires clients après ou pendant le séjour');
                    $em->persist($posts);
                    $em->flush();

                    // Données de la réponse JSON
                    $output = '{"response":"success", "message":"Votre commentaire a bien été ajouté", "icon":"fas fa-check"}';
                } else {
                    $output = '{"response":"error", "message":"Un commentaire avec la même réservation que vous avez déjà faite existe déjà.", "icon":"fas fa-exclamation"}';
                }
            } else {
                $output = '{"response":"error", "message":"Un problème est survenu, il est possible que vous n\'ayez jamais réservé cet habitat avec ce compte.", "icon":"fas fa-exclamation"}';
            }
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);

    }


    // Modération d'un commentaire client
    #[Route('/admin/moderation-comments', name: 'moderation_comments')]
    public function moderationComments(ManagerRegistry $doctrine, Security $security, PaginatorInterface $paginator, Request $request)
    {
        // Récupération des données de l'utilisateur authentifié
        $auth = $security->getUser();

        // Récupération des données JSON reçues
        $data = json_decode(file_get_contents('php://input'), true);

        // Vérification des données et redirection sur la page d'accueil si la variable est vide
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }

        // Initialisation du variable de réponse en format JSON
        $response = [
            "response" => "error",
            "message" => "",
            "icon" => "fas fa-exclamation",
            "data" => ""
        ];

        // Vérifions si l'utilisateur est connecté
        if ($auth) {
            $postRep = $doctrine->getRepository(Posts::class);
            $postData = $postRep->findBy(['type' => 'COMMENTS']);
            $moderation = [];
            foreach ($postData as $post) {
                // Récupération des données de l'utilisateur
                $userRep = $doctrine->getRepository(Users::class);
                $userData = $userRep->find($post->getUser());

                // Récupération des données de l'habitation
                $dwelRep = $doctrine->getRepository(Dwelling::class);
                $dwelData = $dwelRep->find($post->getDwelling());
                if ($userData && $dwelData) {
                    array_push($moderation, [
                        "first_name" => $userData->getFirstName(), 
                        "last_name" => $userData->getLastName(), 
                        "email" => $userData->getEmail(), 
                        "dwel_id" => $dwelData->getId(), 
                        "title" => $dwelData->getTitle(), 
                        "id" => $post->getId(), 
                        "comment" => $post->getDescription(), 
                        "statut" => $post->getStatut(), 
                        "date" => $post->getAddedAt(),
                    ]);
                }
            }
            $moderation = $paginator->paginate(
                $moderation,
                $request->query->getInt('page', 1),
            2);

            $response = [
                "response" => "success",
                "message" => "",
                "icon" => "fas fa-check",
                "data" => $moderation
            ];
        } else {
            $response = [
                "response" => "error",
                "message" => "Vous ne vous êtes pas authentifié",
                "icon" => "fas fa-exclamation",
                "data" => ""
            ];
        }
        return $this->render('inc/modules/comments/comments.html.twig', $response);

    }

    // Gestion d'un commentaire client
    #[Route('/admin/manage-comments', name: 'manage_comments')]
    public function manageComments(ManagerRegistry $doctrine, Security $security)
    {
        // Récupération des données de l'utilisateur authentifié
        $auth = $security->getUser();

        // Récupération des données JSON reçues
        $data = json_decode(file_get_contents('php://input'), true);

        // Vérification des données et redirection sur la page d'accueil si la variable est vide
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }

        // Initialisation du variable de réponse en format JSON
        $output = '{"response":"error", "message":"Une erreur inconnue s\'est produite, merci de recommencer", "icon":"fas fa-exclamation"}';

        // Vérifions si l'utilisateur est connecté
        if ($auth) {
            if (!in_array("ROLE_ADMIN", $auth->getRoles()) && !in_array("ROLE_MODERATOR", $auth->getRoles())) {
                $output = '{"response":"error", "message":"Vous n\'avez pas les droits nécéssaires pour gérer ce commentaire ou il est possible que vous ne soyez plus connecté", "icon":"fas fa-exclamation"}';
                return new JsonResponse($output);
            }
            $id = $data['id'];
            $postRep = $doctrine->getRepository(Posts::class);
            $postData = $postRep->findOneBy(["id" => $id, "type" => "COMMENTS"]);
            
            if ($postData) {
                $em = $doctrine->getManager();
    
                if ($postData->getStatut() == "PRIVATE") {
                    $postData->setStatut("PUBLIC");
                } else {
                    $postData->setStatut("PRIVATE");
                }
                $em->persist($postData);
                $em->flush();
                $output = '{"response":"success", "message":"Modification appliquée avec succès", "icon":"fas fa-check"}';
            }

        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }

}
