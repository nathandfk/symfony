<?php

namespace App\Controller;

use App\Data\Calendar;
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

class AdminController extends AbstractController
{
    #[Route('/admin/users-list', name: 'admin_users_list')]
    public function list(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $security = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($security) {
            $roles = $security->getRoles();
            $response = ['users' => '', 'errors' => "Aucune donnée chargéee"];
            if (!in_array('ROLE_ADMIN', $roles) && !in_array('ROLE_MODERATOR', $roles)) {
                $response = ['users' => '', 'errors' => "Vous n'avez pas les droits nécessaire pour accéder à ce bloc" ];
            } else {
                $value = $data['value'];
                if (in_array('ROLE_ADMIN', $roles)) {
                    $users = empty($value) ? $dataUsers->showUsers("*", " ORDER BY id DESC LIMIT 15")
                    : $dataUsers->showUsers("*", "WHERE first_name LIKE '%$value%' OR last_name LIKE '%$value%' OR (email LIKE '%$value%' OR host LIKE '%$value%' OR roles LIKE '%$value%') LIMIT 15");
                } else {
                    $users = empty($value) ? $dataUsers->showUsers("*", "WHERE roles NOT LIKE '%ROLE_ADMIN%' ORDER BY id DESC LIMIT 15")
                    : $dataUsers->showUsers("*", "WHERE first_name LIKE '%$value%' OR last_name LIKE '%$value%' OR (email LIKE '%$value%' OR host LIKE '%$value%') OR roles LIKE '%$value%' AND roles NOT LIKE '%ROLE_ADMIN%'  LIMIT 15");
                }
                
                if (!isset($users) || empty($users)) {
                    $response = ['users' => '', 'errors' => 'Aucune donnée trouvée'];
                } else {
                    $response = ['users' => $users, 'errors' => ''];
                }
            }
        } else {
            $response = ['users' => '', 'errors' => "Vous ne vous êtes pas authentifier"];
        }
        return $this->render('inc/pages/admin/users-list.html.twig', $response);
    }

    #[Route('/admin/user-view', name: 'admin_user_view')]
    public function view(ManagerRegistry $doctrine, Security $security, UsersRepository $users): Response
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $id = $data['id'];
        $users = $users->showUsers("*", "WHERE id = $id");
        if ($users) {
            
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
            
            $unlocked = $account ? 'checked' : '';
            $locked = $account ? '' : 'checked';
            $adminRole = in_array("ROLE_ADMIN", $roles) ? "checked" : "";
            $adminDisplay = !in_array("ROLE_ADMIN", $auth->getRoles()) ? "d-none" : "";
            $hostRole = in_array("ROLE_HOST", $roles) ? "checked" : "";
            $moderatorRole = in_array("ROLE_MODERATOR", $roles) ? "checked" : "";

            $privateHost = $host == "PRIVATE" ? "selected" : "";
            $publicHost = $host == "PUBLIC" ? "selected" : "";
            $blockedHost = $host == "BLOCKED" ? "selected" : "";
        
        $output = '{"response":"success", "first_name":"'.$firstName.'",
            "last_name":"'.$lastName.'","email":"'.$email.'",
            "number":"'.$number.'","admin":"'.$adminRole.'",
            "host":"'.$hostRole.'","moderator_role":"'.$moderatorRole.'",
            "private_host":"'.$privateHost.'", "public_host":"'.$publicHost.'", 
            "blocked_host":"'.$blockedHost.'", "user_id":"'.$userId.'",
            "account_locked":"'.$locked.'", "account_unlocked":"'.$unlocked.'", "display":"'.$adminDisplay.'"}';
        } else {
            $output = '{"response":"error"}';
        }
        return new JsonResponse($output);
    }


    #[Route('/admin/user-edit', name: 'admin_user_update')]
    public function update(ManagerRegistry $doctrine, Security $security): Response
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if ($auth) {
            if (in_array("ROLE_ADMIN", $auth->getRoles()) || in_array("ROLE_MODERATOR", $auth->getRoles())) {
                $roles = ["ROLE_USER"];

                $allHostStatus = ["PUBLIC", "PRIVATE", "BLOCKED"];

                (in_array("ROLE_ADMIN", $auth->getRoles()) && isset($data['admin_role']) && !empty($data['admin_role'])) ? array_push($roles, "ROLE_ADMIN") : "";
                (isset($data['host_role']) && !empty($data['host_role'])) ? array_push($roles, "ROLE_HOST") : "";
                (isset($data['moderator_role']) && !empty($data['moderator_role'])) ? array_push($roles, "ROLE_MODERATOR") : "";
                $accountStatus = (isset($data['account_status']) && !empty($data['account_status']) && $data['account_status']=='locked') ? false : true;
                
                
                $userId = $data['user_id'];


                // $user = isset($data['host_level']) && !empty($data['host_level']) ? $data['user_role'] : "";
                $getUser = "";
                $repository = $doctrine->getRepository(Users::class);
                $getUser = $repository->find($userId);
                if ($getUser) {
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
