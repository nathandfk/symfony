<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\Users;
use App\Repository\PostsRepository;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class DwellingController extends AbstractController
{
    // Insertion d'un commentaire depuis l'application AtypikHouse
    #[Route('/api/comment/{id}', name: 'api_comment', methods:['POST'])]
    public function app_comment(ManagerRegistry $doctrine)
    {
        $data = json_decode(file_get_contents('php://input'), true);

        // Si la variable $data est vide retournons une erreur en format JSON
        if (!$data) {
            return new JsonResponse('{"response" => "error", "message" => "Accès refusé"}');
        }
        $id = $data['id'];
        $email = $data['email'];
        $comment = $data['comment'];
        $salt = $data['salt'];
        $output = "{'response' => 'error', 'message' => 'Aucune clé'}";

        // Vérifions la clé salt que l'application a envoyé si elle concorde
        if ($salt == "_Z34azertNCVI3Y65514-_ddezERTEETAZbn----qse321ghbd_-ghdsrza23436d___") {

            // Vérifions si le commentaire envoyé est vide avant l'insertion
            if (!empty($comment)) {
                // Récupérons les données utilisateurs de l'utilisateur qui s'est connecté sur l'application
                $userRep = $doctrine->getRepository(Users::class);
                $user = $userRep->findOneBy(['email' => $email]);
                if ($user) {
                    $reservRep = $doctrine->getRepository(Reservation::class);
                    $reservation = $reservRep->find($id);


                    // Vérifions si le logement à commenter a un statut CONFIRMED
                    if ($reservation->getStatut() == "CONFIRMED") {
                        $date = new DateTimeImmutable('now', new DateTimeZone('Europe/Paris'));
                        if ((strtotime($date->format('Y-m-d')) - strtotime($reservation->getStartDate()->format('Y-m-d'))) >= 0) {
                            $postsRep = $doctrine->getRepository(Posts::class);
                            $posts = $postsRep->findBy(['user' => $user->getId(), 'dwelling' => $reservation->getDwelling()->getId(), 'type' => 'COMMENTS', 'number' => $reservation->getId()]);
                            
                            if (!$posts) {
                                // Insérons le commentaire et renvoyons lui une réponse
                                $postAdd = new Posts();
                                $em = $doctrine->getManager();
                                $postAdd->setUser($user);
                                $postAdd->setDwelling($reservation->getDwelling());
                                $postAdd->setType("COMMENTS");
                                $postAdd->setStatut("PRIVATE");
                                $postAdd->setTitle("");
                                $postAdd->setAbstract("");
                                $postAdd->setDescription($comment);
                                $postAdd->setNumber($reservation->getId());
                                $em->persist($postAdd);
                                $em->flush();
                                $output = '{"response" => "success", "message" => "Commentaire ajouté avec succès"}';
                            }
                        }
                    }
                }
            }
        }
        return new JsonResponse($output);
    }

    // Insertion d'un logement dans les favoris
    #[Route('/dwelling/add-favorite', name: 'dwelling_add_favorite')]
    public function favorite(ReservationRepository $reservations, Calendar $calendarDate, ManagerRegistry $doctrine, Security $security): Response
    {
        // Utilisateur connecté
        $auth = $security->getUser();

        // Récupérons les données JSON envoyées
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $id = $data['id'];
            if (!empty($id)) {
                $userRep = $doctrine->getRepository(Users::class);
                $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);


                $dwelRep = $doctrine->getRepository(Dwelling::class);
                $dwel = $dwelRep->findOneBy(['id' => $id]);


                if ($user && $dwel) {
                    // Récupérons les données de la table POST du logement que l'utilisateur connecté souhaite ajouter
                    $postsRep = $doctrine->getRepository(Posts::class);
                    $postData = $postsRep->findBy(['user' => $user->getId(), 'type' => 'FAVORITE', 'dwelling' => $dwel->getId()]);

                    // Si ce logement existe retournons lui une erreur avec un messsage
                    if ($postData) {
                        $output = '{"response":"error", "message":"Ce logement fait déjà parti de vos favoris", "icon":"fas fa-exclamation"}';
                        return new JsonResponse($output);
                    }
                    
                    // Insertion d'un logement dans les Favoris
                    $em = $doctrine->getManager();
                    $posts = new Posts();
                    $posts->setUser($user);
                    $posts->setDwelling($dwel);
                    $posts->setType('FAVORITE');
                    $posts->setDescription('');
                    $posts->setTitle('');
                    $posts->setAbstract('');
                    $em->persist($posts);
                    $em->flush();

                    $output = '{"response":"success", "message":"Ce logement a bien été ajouté dans vos favoris", "icon":"fas fa-check"}';
                } else {
                    $output = '{"response":"error", "message":"Une erreur est survenue, veuillez recommencer", "icon":"fas fa-exclamation"}';
                }
            } else {
                $output = '{"response":"error", "message":"Une erreur inattendue est survenue, actualisez votre page et recommencez", "icon":"fas fa-exclamation"}';
            }

        } else {
            $output = '{"response":"error", "message":"", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


    // Ajout des signalements des habitations
    #[Route('/dwelling/add-signal', name: 'dwelling_add_signal')]
    public function signal(MailerInterface $mailer, ManagerRegistry $doctrine, Security $security): Response
    {
        // Données utilisateur connecté
        $auth = $security->getUser();

        // Données JSON
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        // Si l'utilisateur est bien connecté
        if ($auth) {
            $id = $data['id'];
            if (!empty($id)) {

                // Récupérons toutes les données de l'utilisateur connecté
                $userRep = $doctrine->getRepository(Users::class);
                $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);


                $dwelRep = $doctrine->getRepository(Dwelling::class);
                $dwel = $dwelRep->findOneBy(['id' => $id]);


                if ($user && $dwel) {
                    $postsRep = $doctrine->getRepository(Posts::class);
                    $postData = $postsRep->findBy(['user' => $user->getId(), 'dwelling' => $dwel->getId(), 'type' => 'SIGNAL', 'statut' => 'IN_PROGRESS']);
                    $check = $postsRep->findBy(['user' => $user->getId(), 'type' => 'SIGNAL', 'statut' => 'IN_PROGRESS']);

                    // Vérifions si le signalement n'existe pas déjà et n'est toujours pas traité
                    if ($postData) {
                        if (count($check) >= 10) {
                            $output = '{"response":"error", "message":"Nous avons récemment reçu plusieurs de vos signalements. Veuillez attendre que certains soient traiter par l\'administrateur", "icon":"fas fa-exclamation"}';
                            return new JsonResponse($output);
                        }
                        $output = '{"response":"error", "message":"Ce logement fait déjà parti de vos signalements. Votre demande est en cours de traitement par l\'administrateur", "icon":"fas fa-exclamation"}';
                        return new JsonResponse($output);
                    }
                    
                    // Insertion du signalement dans notre base de données
                    $em = $doctrine->getManager();
                    $posts = new Posts();
                    $posts->setUser($user);
                    $posts->setDwelling($dwel);
                    $posts->setType('SIGNAL');
                    $posts->setDescription('');
                    $posts->setTitle('');
                    $posts->setAbstract('');
                    $posts->setStatut('IN_PROGRESS');
                    $em->persist($posts);
                    $em->flush();

                    // Récupération du mail administrateur
                        $postsRep = $doctrine->getRepository(Posts::class);
                        $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                        if ($posts) {

                            // Envoyons un mail de confirmation à l'utilisateur pour son signalement
                            foreach ($posts as $post) {
                                $first = $user->getFirstName();
                                $last = $user->getLastName();
                                $emailUser = $user->getEmail();
                                $email = (new Email())
                                    ->from("AtypikHouse <".$post->getDescription().">")
                                    ->to($post->getDescription())
                                    ->subject('SIGNALEMENT')
                                    ->text('SIGNALEMENT')
                                    ->html("
                                    <div>
                                    <p>Message destiné à l'administration de AtypikHouse !</p>
                                    <p>Un utilisateur vient de signaler un logement sur le site, veuillez vous rendre dans la rubrique dédiée à ce sujet pour en connaître les détails et traiter ce signalement.</p>
                                    <div>Détails de l'utilisateur ayant signalé le logement</div>
                                    <p>Prénom: <b>$first</b></p>
                                    <p>Nom: <b>$last</b></p>
                                    <p>Email: <b>$emailUser</b></p>
                                    <p>L'équipe AtypikHouse.</p>
                                    <div style='text-align: center;'>
                                    <img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                                    </div>
                                    ");

                                $mailer->send($email);
                            }
                        }

                    $output = '{"response":"success", "message":"Ce logement a bien été ajouté dans la liste de vos signalements", "icon":"fas fa-check"}';
                } else {
                    $output = '{"response":"error", "message":"Une erreur est survenue, veuillez recommencer", "icon":"fas fa-exclamation"}';
                }
            } else {
                $output = '{"response":"error", "message":"Une erreur inattendue est survenue, actualisez votre page et recommencez", "icon":"fas fa-exclamation"}';
            }

        } else {
            $output = '{"response":"error", "message":"", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


    // Fermeture ou la réouverture d'un signalement
    #[Route('/dwelling/closed-signal', name: 'dwelling_closed_signal')]
    public function closedSignal(MailerInterface $mailer, ManagerRegistry $doctrine, Security $security): Response
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $id = $data['id'];
            if (!empty($id)) {
                if (in_array('ROLE_ADMIN', $auth->getRoles()) || in_array('ROLE_MODERATOR', $auth->getRoles())) {

                    $postsRep = $doctrine->getRepository(Posts::class);
                    $postData = $postsRep->find($id);

                    if ($postData) {
                        $em = $doctrine->getManager();
                        $userRep = $doctrine->getRepository(Users::class);
                        $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);

                        if ($postData->getStatut() == "IN_PROGRESS") {
                            $postData->setStatut('CLOSED');
                        } else {
                            $postData->setStatut('IN_PROGRESS');
                        }
                        $postData->setNumber($user->getId());
                        $em->persist($postData);
                        $em->flush();

                        $postsRep = $doctrine->getRepository(Posts::class);
                        $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);

                        $userRepSig = $doctrine->getRepository(Users::class);
                        $userSig = $userRepSig->find($postData->getUser());

                        if ($posts) {
                            foreach ($posts as $post) {
                                $first = $userSig->getFirstName();
                                $email = (new Email())
                                    ->from("AtypikHouse <".$post->getDescription().">")
                                    ->to($userSig->getEmail())
                                    ->subject('VOTRE SIGNALEMENT A ÉTÉ TRAITÉ')
                                    ->text('VOTRE SIGNALEMENT A ÉTÉ TRAITÉ')
                                    ->html("
                                    <div>
                                    <p>Bonjour $first,</p>
                                    <p>Il y'a du nouveau sur votre signalement, veuillez-vous connecter et vous rendre dans la rubrique dédiée pour en connaître l'état.</p>
                                    <p>Il est possible que nous revenons vers vous pour en savoir d'avantages sur les raisons qui vous ont poussé à signaler ce logement.</p>
                                    <p>Nous faisons de notre mieux pour améliorer nos services.</p>
                                    <p>Nous vous remercions pour la confiance que vous nous accorder.</p>
                                    <p>L'équipe AtypikHouse.</p>
                                    <div style='text-align: center;'>
                                    <img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                                    </div>
                                    ");

                                $mailer->send($email);
                            }
                        }
                        $output = '{"response":"success", "message":"Modification appliquée avec succès", "icon":"fas fa-check"}';

                    } else {
                        $output = '{"response":"error", "message":"Une erreur inattendue est survenue", "icon":"fas fa-exclamation"}';
                    }
                } else {
                    $output = '{"response":"error", "message":"Vous n\'avez pas les droits requis pour cloturer un signalement", "icon":"fas fa-exclamation"}';
                }

            } else {
                $output = '{"response":"error", "message":"Une erreur inattendue est survenue, actualisez votre page et recommencez", "icon":"fas fa-exclamation"}';
            }

        } else {
            $output = '{"response":"error", "message":"", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


}

