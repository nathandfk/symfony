<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

class AdminController extends AbstractController
{
    // Liste des utilisateurs du site accessible avec un rôle admin
    #[Route('/admin/users-list', name: 'admin_users_list')]
    public function list(Security $security, UsersRepository $dataUsers)
    {
        // Récupération des données de l'utilisateur authentifié
        $security = $security->getUser();

        // Récupération des données JSON reçues
        $data = json_decode(file_get_contents('php://input'), true);

        // Vérification des données et redirection sur la page d'accueil si les données n'existent pas
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }

        // Vérification de la connection d'un utilisateur
        if ($security) {

            // Récupération du rôle de l'utilisateur connecté
            $roles = $security->getRoles();

            // Valeur à retourner dans la réponse
            $response = ['users' => '', 'errors' => "Aucune donnée chargéee"];

            // Vérifions si l'utilisateur qui s'est authentifié à un rôle ADMIN ou MODERATEUR
            if (!in_array('ROLE_ADMIN', $roles) && !in_array('ROLE_MODERATOR', $roles)) {
                $response = ['users' => '', 'errors' => "Vous n'avez pas les droits nécessaire pour accéder à ce bloc" ];
            } else {
                $value = $data['value'];
                if (in_array('ROLE_ADMIN', $roles)) {
                    // Si l'utilisateur connecté est un administrateur nous lui affichons toutes les données sans restriction
                    // Cette liste comporte une barre de recherche, la seconde requête en else nous permet d'afficher le résultat de notre recherche
                    $users = empty($value) ? $dataUsers->showUsers("*", " ORDER BY id DESC LIMIT 15")
                    : $dataUsers->showUsers("*", "WHERE first_name LIKE '%$value%' OR last_name LIKE '%$value%' OR (email LIKE '%$value%' OR host LIKE '%$value%' OR roles LIKE '%$value%') LIMIT 15");
                } else {
                    // Si l'utilisateur connecté est un modérateur nous lui affichons toutes les données sans les données d'un administrateur
                    // Cette liste comporte une barre de recherche, la seconde requête en else nous permet d'afficher le résultat de notre recherche
                    $users = empty($value) ? $dataUsers->showUsers("*", "WHERE roles NOT LIKE '%ROLE_ADMIN%' ORDER BY id DESC LIMIT 15")
                    : $dataUsers->showUsers("*", "WHERE first_name LIKE '%$value%' OR last_name LIKE '%$value%' OR (email LIKE '%$value%' OR host LIKE '%$value%') OR roles LIKE '%$value%' AND roles NOT LIKE '%ROLE_ADMIN%'  LIMIT 15");
                }
                
                // Valeur à retourner dans la réponse
                if (!isset($users) || empty($users)) {
                    $response = ['users' => '', 'errors' => 'Aucune donnée trouvée'];
                } else {
                    $response = ['users' => $users, 'errors' => ''];
                }
            }
        } else {
            // Valeur à retourner dans la réponse
            $response = ['users' => '', 'errors' => "Vous ne vous êtes pas authentifier"];
        }
        // Retournons une réponse
        return $this->render('inc/pages/admin/users-list.html.twig', $response);
    }



    // Données enregistrées en base de données de l'utilisateur sélectionné
    #[Route('/admin/user-view', name: 'admin_user_view')]
    public function view(ManagerRegistry $doctrine, Security $security, UsersRepository $users): Response
    {
        // Récupération des données de l'utilisateur authentifié
        $auth = $security->getUser();

        // Récupération des éléments JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Vérification des données et redirection sur la page d'accueil si les données n'existent pas
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }

        // Identifiant de l'utilisateur
        $id = $data['id'];

        // Requête de récupération des données d'un seul utilisateur par rapport à son identifiant
        $users = $users->showUsers("*", "WHERE id = $id");

        // Vérification si l'utilisateur existe
        if ($users) {
        
        // Récupération des données de l'utilisateur en format de notre entité users
        $repository = $doctrine->getRepository(Users::class);
        $user = $repository->find($id);
        $roles = $user->getRoles();
            $account = $user->isAccount();
            $userId = $user->getId();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $email = $user->getEmail();
            $number = !is_null($user->getPhoneNumber()) ? $user->getPhoneNumber() : "";
            $host = $user->getHost();
            
        // Comparaison et vérification des données 
            $unlocked = $account ? 'checked' : '';
            $locked = $account ? '' : 'checked';
            $adminRole = in_array("ROLE_ADMIN", $roles) ? "checked" : "";
            $adminDisplay = !in_array("ROLE_ADMIN", $auth->getRoles()) ? "d-none" : "";
            $hostRole = in_array("ROLE_HOST", $roles) ? "checked" : "";
            $moderatorRole = in_array("ROLE_MODERATOR", $roles) ? "checked" : "";

            $privateHost = $host == "PRIVATE" ? "selected" : "";
            $publicHost = $host == "PUBLIC" ? "selected" : "";
            $blockedHost = $host == "BLOCKED" ? "selected" : "";

        // Etablissement des données dans un format JSON
        $output = '{"response":"success", "first_name":"'.$firstName.'",
            "last_name":"'.$lastName.'","email":"'.$email.'",
            "number":"'.$number.'","admin":"'.$adminRole.'",
            "host":"'.$hostRole.'","moderator_role":"'.$moderatorRole.'",
            "private_host":"'.$privateHost.'", "public_host":"'.$publicHost.'", 
            "blocked_host":"'.$blockedHost.'", "user_id":"'.$userId.'",
            "account_locked":"'.$locked.'", "account_unlocked":"'.$unlocked.'", "display":"'.$adminDisplay.'"}';
        } else {
            // Si l'utilisateur n'existe pas nous retournons une erreur
            $output = '{"response":"error"}';
        }
        // Renvoie des données en JSON 
        return new JsonResponse($output);
    }


    // Modification d'un utilisateur, (Statut du compte, Rôles, profil hôte)
    #[Route('/admin/user-edit', name: 'admin_user_update')]
    public function update(ManagerRegistry $doctrine, Security $security): Response
    {
        // Récupération des données de l'utilisateur authentifié
        $auth = $security->getUser();

        // Récupération des éléments JSON
        $data = json_decode(file_get_contents('php://input'), true);
        
        // Vérifions si l'utilisateur existe
        if ($auth) {

            // Vérifions si l'utilisateur qui s'est authentifié à un rôle ADMIN ou MODERATEUR
            if (in_array("ROLE_ADMIN", $auth->getRoles()) || in_array("ROLE_MODERATOR", $auth->getRoles())) {
                $roles = ["ROLE_USER"];

                $allHostStatus = ["PUBLIC", "PRIVATE", "BLOCKED"];

                // Vérification des données et accessibilité si l'utilisateur connecté à le droit de modifier ou non l'utilisateur
                (in_array("ROLE_ADMIN", $auth->getRoles()) && isset($data['admin_role']) && !empty($data['admin_role'])) ? array_push($roles, "ROLE_ADMIN") : "";
                (isset($data['host_role']) && !empty($data['host_role'])) ? array_push($roles, "ROLE_HOST") : "";
                (isset($data['moderator_role']) && !empty($data['moderator_role'])) ? array_push($roles, "ROLE_MODERATOR") : "";
                $accountStatus = (isset($data['account_status']) && !empty($data['account_status']) && $data['account_status']=='locked') ? false : true;
                
                
                $userId = $data['user_id'];


                // Récupération des données utilisateurs pour une mise à jour
                $repository = $doctrine->getRepository(Users::class);
                $getUser = $repository->find($userId);

                // Vérification de l'utilisateur s'il existe
                if ($getUser) {
                    // Initialisation et application des modification, préparation de la requête et exécution
                    $em = $doctrine->getManager();
                    $lastHost = $getUser->getHost();
                    $hostStatut = in_array($data['host_statut'], $allHostStatus) ? $data['host_statut'] : $lastHost;
                    $getUser->setRoles($roles);
                    $getUser->setHost($hostStatut);
                    $getUser->setAccount($accountStatus);
                    $getUser->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                    
                    $em->persist($getUser);
                    $em->flush();
                    $output = '{"response":"success", "message":"Modification réussie", "icon":"fas fa-thumbs-up"}';
                } else {
                    $output = '{"response":"error"}';
                }
            }
        }
        return new JsonResponse($output);
    }
    
}
