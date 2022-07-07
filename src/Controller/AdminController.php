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
    public function list(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $users, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $security = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($security) {
            $roles = $security->getRoles();
            if (!in_array('ROLE_ADMIN', $roles)) {
                $data = ['error' => "Vous n'avez pas les droits nécessaire pour accéder à ce bloc" ];
            }
            $value = $data['value'];
            $all = $users->showUsers("*", "LIMIT 15");
            $filter = $users->showUsers("*", "WHERE first_name LIKE '%$value%' || last_name LIKE '%$value%' || email LIKE '%$value%' || statut LIKE '%$value%' || roles LIKE '%$value%' LIMIT 15");
            $users = empty($value) ? $all : $filter ;
            
            $data = ['users' => $users];
            // if (!$users) {
            //     $data = [
            //         'error' => "Aucune donnée trouvée"];
            // }
            // $repository = $doctrine->getRepository(Users::class);
            // $users = $repository->findAll();
            
            return $this->render('inc/pages/admin/users-list.html.twig', $data);
        }
    }

        #[Route('/admin/user', name: 'admin_user_view')]
        public function view(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $users, DwellingRepository $dwelRep, PaginatorInterface $paginator): Response
        {
            $security = $security->getUser();
            $data = json_decode(file_get_contents('php://input'), true);

            $id = $data['id'];
            $users = $users->showUsers("*", "WHERE id = $id");
            $firstName = "";
            $lastName = "";
            foreach ($users as $user) {
                $firstName = $user['first_name'];
                $lastName = $user['last_name'];
                $email = $user['email'];
                $number = $user['phone_number'];
                $statut = $user['statut'];
                $roles = $user['roles'];
            }
            $output = '{"statut":"error", "first_name":"'.$firstName.'","last_name":"'.$lastName.'","email":"'.$email.'","number":"'.$number.'","statut":"'.$statut.'","roles":"'.$roles.'"}';
            return new JsonResponse($output);
        }
                // $calendar = new Calendar();
        // $calendar = $calendar::calendar();

        // // $repository = $doctrine->getRepository(Dwelling::class);
        // // $dwellings = $repository->findAll();
        // $dataDwellings = $dwelRep->showDataDwellings();

        // $dataDwellings = $paginator->paginate(
        //     $dataDwellings,
        //     $request->query->getInt('page', 1),
        //     12);
        // return $this->render('inc/pages/category/index.html.twig', [
        //     'carousel' => true,
        //     'title' => 'Laissez-vous guider',
        //     'picturesUrl' => $this->getParameter('pictures_directory'),
        //     'calendar' => $calendar,
        //     'dataDwellings' => $dataDwellings,
        // ]);
    
}
