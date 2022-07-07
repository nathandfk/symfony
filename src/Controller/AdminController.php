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
            if (!in_array('ROLE_ADMIN', $roles)) {
                $response = ['users' => '', 'errors' => "Vous n'avez pas les droits nécessaire pour accéder à ce bloc" ];
            } else {
                $value = $data['value'];
                $users = empty($value) ? $dataUsers->showUsers("*", "LIMIT 15")
                : $dataUsers->showUsers("*", "WHERE first_name LIKE '%$value%' || last_name LIKE '%$value%' || email LIKE '%$value%' || statut LIKE '%$value%' || roles LIKE '%$value%' LIMIT 15");
                
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
    public function view(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $users, DwellingRepository $dwelRep, PaginatorInterface $paginator): Response
    {
        $security = $security->getUser();
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
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $email = $user->getEmail();
            $number = !is_null($user->getPhoneNumber()) ? $user->getPhoneNumber() : "";
            $host = $user->getHost();
            
            
            $adminRole = in_array("ROLE_ADMIN", $roles) ? "checked" : "";
            $userRole = in_array("ROLE_USER", $roles) ? "checked" : "";
            $hostRole = in_array("ROLE_HOST", $roles) ? "checked" : "";

            $privateHost = $host == "PRIVATE" ? "selected" : "";
            $publicHost = $host == "PUBLIC" ? "selected" : "";
            $blockedHost = $host == "BLOCKED" ? "selected" : "";
        
        $output = '{"response":"success", "first_name":"'.$firstName.'",
            "last_name":"'.$lastName.'","email":"'.$email.'",
            "number":"'.$number.'","admin":"'.$adminRole.'",
            "user":"'.$userRole.'","host":"'.$hostRole.'",
            "private_host":"'.$privateHost.'", "public_host":"'.$publicHost.'", "blocked_host":"'.$blockedHost.'"}';
        } else {
        $output = '{"response":"error"}';
        }
        return new JsonResponse($output);
    }


    #[Route('/admin/user-edit', name: 'admin_user_update')]
    public function update(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $users, DwellingRepository $dwelRep, PaginatorInterface $paginator): Response
    {
        $security = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);

        $output = '{"response":"'.$data.'"}';

        return new JsonResponse($output);
    }
    
}
