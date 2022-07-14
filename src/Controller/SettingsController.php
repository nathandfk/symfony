<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Posts;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

class SettingsController extends AbstractController
{
    #[Route('/account/settings', name: 'account_settings')]
    public function settings(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $roles = $auth->getRoles();
            if (in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MODERATOR', $roles)) {
                $message = $data['message_setting'];
                $tax = $data['tax_setting'];
                $type = $data['type_setting'];
                $equipment = $data['equipment_setting'];
                if (!empty($message) && !empty($tax)) {
                    $data = [
                        'welcome' => $message,
                        'tax' => $tax,
                        'type' => $type,
                        'equipment' => $equipment,
                    ];


                    $posts = new Posts();
                    $repository = $doctrine->getRepository(Users::class);
                    $user = $repository->findOneBy(['email' => $auth->getUserIdentifier()]);
                    $em = $doctrine->getManager();
                    $posts->setUser($user);
                    $posts->setTitle("WELCOME");
                    $posts->setDescription($value);
                    $em->persist($posts);
                    $em->flush();
                    
                    // if (!empty($message) || !empty($tax)) {                   
                    // }
                    // $users = empty($value) ? $dataUsers->showUsers("*", " ORDER BY id DESC LIMIT 15")
                    // : $dataUsers->showUsers("*", "WHERE first_name LIKE '%$value%' || last_name LIKE '%$value%' || email LIKE '%$value%' || host LIKE '%$value%' || roles LIKE '%$value%' LIMIT 15");
                    $output = '{"response":"success", "message":"Données insérées avec succès !", "icon":"fas fa-exclamation"}';
                } else {
                    $output = '{"response":"success", "message":"Les champs obligatoires n\'ont pas été renseignés", "icon":"fas fa-exclamation"}';
                }
            } else {
                $output = '{"response":"error", "message":"Vous n\'avez pas les droits nécessaires", "icon":"fas fa-exclamation"}';
            }
            
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


    #[Route('/account/delete', name: 'account_delete')]
    public function delete(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $em = $doctrine->getManager();
            $repository = $doctrine->getRepository(Users::class);
            $user = $repository->findOneBy(['email' => $auth->getUserIdentifier()]);
            $user->setDeletedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
            $em->persist($user);
            $em->flush($user);
            $output = '{"response":"success", "message":"Votre compte a correctement été supprimé, vous allez être déconnecté !", "icon":"fas fa-exclamation", "redirect":"/logout"}';
            // if ($flush) {
                
            // } else {
            //     $output = '{"response":"error", "message":"Une erreur est survenue lors de la suppression de votre compte", "icon":"fas fa-exclamation", "redirect": ""}';
            // }
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation", "redirect":""}';
        }
        return new JsonResponse($output);
    }

    // #[Route('/admin/user-view', name: 'admin_user_view')]
    // public function view(ManagerRegistry $doctrine, Security $security, UsersRepository $users): Response
    // {
    //     $security = $security->getUser();
    //     $data = json_decode(file_get_contents('php://input'), true);
    //     if (!$data) {
    //         return $this->redirectToRoute('app_index');
    //     }
    //     $id = $data['id'];
    //     $users = $users->showUsers("*", "WHERE id = $id");
    //     if ($users) {
            
    //     $repository = $doctrine->getRepository(Users::class);
    //     $user = $repository->find($id);
    //     $roles = $user->getRoles();
    //         $account = $user->isAccount();
    //         $userId = $user->getId();
    //         $firstName = $user->getFirstName();
    //         $lastName = $user->getLastName();
    //         $email = $user->getEmail();
    //         $number = !is_null($user->getPhoneNumber()) ? $user->getPhoneNumber() : "";
    //         $host = $user->getHost();
            
    //         $unlocked = $account ? 'checked' : '';
    //         $locked = $account ? '' : 'checked';
    //         $adminRole = in_array("ROLE_ADMIN", $roles) ? "checked" : "";
    //         $hostRole = in_array("ROLE_HOST", $roles) ? "checked" : "";
    //         $moderatorRole = in_array("ROLE_MODERATOR", $roles) ? "checked" : "";

    //         $privateHost = $host == "PRIVATE" ? "selected" : "";
    //         $publicHost = $host == "PUBLIC" ? "selected" : "";
    //         $blockedHost = $host == "BLOCKED" ? "selected" : "";
        
    //     $output = '{"response":"success", "first_name":"'.$firstName.'",
    //         "last_name":"'.$lastName.'","email":"'.$email.'",
    //         "number":"'.$number.'","admin":"'.$adminRole.'",
    //         "host":"'.$hostRole.'","moderator_role":"'.$moderatorRole.'",
    //         "private_host":"'.$privateHost.'", "public_host":"'.$publicHost.'", 
    //         "blocked_host":"'.$blockedHost.'", "user_id":"'.$userId.'",
    //         "account_locked":"'.$locked.'", "account_unlocked":"'.$unlocked.'"}';
    //     } else {
    //         $output = '{"response":"error"}';
    //     }
    //     return new JsonResponse($output);
    // }


    // #[Route('/admin/user-edit', name: 'admin_user_update')]
    // public function update(ManagerRegistry $doctrine): Response
    // {
    //     // $security = $security->getUser();
    //     $data = json_decode(file_get_contents('php://input'), true);
    //     $roles = ["ROLE_USER"];

    //     $allHostStatus = ["PUBLIC", "PRIVATE", "BLOCKED"];
    //     (isset($data['admin_role']) && !empty($data['admin_role'])) ? array_push($roles, "ROLE_ADMIN") : "";
    //     (isset($data['host_role']) && !empty($data['host_role'])) ? array_push($roles, "ROLE_HOST") : "";
    //     (isset($data['moderator_role']) && !empty($data['moderator_role'])) ? array_push($roles, "ROLE_MODERATOR") : "";
    //     $accountStatus = (isset($data['account_status']) && !empty($data['account_status']) && $data['account_status']=='locked') ? false : true;
         
        
    //     $userId = $data['user_id'];


    //     // $user = isset($data['host_level']) && !empty($data['host_level']) ? $data['user_role'] : "";
    //     $getUser = "";
    //     $repository = $doctrine->getRepository(Users::class);
    //     $getUser = $repository->find($userId);
    //     if ($getUser) {
    //         $em = $doctrine->getManager();
    //         $lastHost = $getUser->getHost();
    //         $hostStatut = in_array($data['host_statut'], $allHostStatus) ? $data['host_statut'] : $lastHost;
    //         $getUser->setRoles($roles);
    //         $getUser->setHost($hostStatut);
    //         $getUser->setAccount($accountStatus);
    //         $getUser->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
    //         $em->persist($getUser);
    //         $em->flush();
    //         $output = '{"response":"success", "message":"Modification réussie", "icon":"fas fa-thumbs-up"}';
    //     } else {
    //         $output = '{"response":"error"}';
    //     }
    //     return new JsonResponse($output);
    // }
    
}
