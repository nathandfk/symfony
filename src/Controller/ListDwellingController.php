<?php

namespace App\Controller;

use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Entity\Users;
use App\Form\DwellingType;
use App\Repository\DwellingRepository;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ListDwellingController extends AbstractController
{
    #[Route('/dwelling/list', name: 'list_dwelling')]
    public function listDwelling(ManagerRegistry $doctrine, Security $security, DwellingRepository $dwellingRepository, PaginatorInterface $paginator, Request $request)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $value = $data['value'];
        if ($auth) {
            $userRep = $doctrine->getRepository(Users::class);
            $users = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);
            if ($users) {
                $userId= $users->getId();
                $userRoles = $auth->getRoles();

                $dwellings = empty($value) ?
                $dwellingRepository->showDwellings("*", "WHERE user_id = $userId ORDER BY id DESC")
                : $dwellingRepository->showDwellings("*", "WHERE user_id = $userId AND (title LIKE '%$value%' OR city LIKE '%$value%') ORDER BY id DESC"); 


                if (in_array('ROLE_ADMIN', $userRoles) || in_array('ROLE_MODERATOR', $userRoles)) {
                    $dwellings = empty($value) ?
                    $dwellingRepository->showDwellings("*", "ORDER BY id DESC")
                    : $dwellingRepository->showDwellings("*", "WHERE (title LIKE '%$value%' OR city LIKE '%$value%') ORDER BY id DESC"); 
                }
                $dwellings = $paginator->paginate(
                    $dwellings,
                    $request->query->getInt('page', 1),
                    5);
                $response = [
                    'response' => 'success', 
                    'message' => "",
                    'datas' => $dwellings,
                ];
                if (!$dwellings) {
                    $response = [
                        'response' => 'success', 
                        'message' => "Aucun habitat trouvé",
                        'datas' => '',
                    ];
                }
            } else {
                $response = [
                    'response' => 'success', 
                    'message' => "Un problème est survenue, veuillez réessayer plus tard",
                    'datas' => '',
                ];
            }
        } else {
            $response = [
                'response' => 'success', 
                'message' => "Vous ne vous êtes pas authentifié",
                'datas' => '',
            ];
        }
        return $this->render('inc/modules/host/list.html.twig', $response);
    }

    #[Route('/dwelling/activate', name: 'dwelling_activate')]
    public function dwellingActivate(ManagerRegistry $doctrine, Security $security, DwellingRepository $dwellingRepository)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $id = $data['id'];
        if ($auth) {
            if (in_array('ROLE_ADMIN', $auth->getRoles()) || in_array('ROLE_MODERATOR', $auth->getRoles())) {
                if (!empty($id)) {
                    $em = $doctrine->getManager();
                    $dwellingRep = $doctrine->getRepository(Dwelling::class);
                    $dwelling = $dwellingRep->findOneBy(['id' => $id]);
                    if ($dwelling) {
                        if ($dwelling->isActivate()) {
                            $dwelling->setActivate(false);
                        } else {
                            $dwelling->setActivate(true);
                        }
                        $em->persist($dwelling);
                        $em->flush();
                        $output = '{"response":"error", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-exclamation"}';
                    } else {
                        $output = '{"response":"error", "message":"Un problème est survenue, veuillez réessayer plus tard", "icon":"fas fa-exclamation"}';
                    }
                } else {
                    $output = '{"response":"error", "message":"Un problème est survenue, veuillez réessayer plus tard", "icon":"fas fa-exclamation"}';
                }
        
            } else {
                $output = '{"response":"error", "message":"Vous n\'avez pas les droits nécessaires pour exécuter cette action", "icon":"fas fa-exclamation"}';

            }
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


    #[Route('/dwelling/delete', name: 'dwelling_delete')]
    public function dwellingDelete(ManagerRegistry $doctrine, Security $security, DwellingRepository $dwellingRepository)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $id = $data['id'];
        if ($auth) {
            if (in_array('ROLE_HOST', $auth->getRoles()) || in_array('ROLE_ADMIN', $auth->getRoles()) || in_array('ROLE_MODERATOR', $auth->getRoles())) {
                if (!empty($id)) {
                    $userRep = $doctrine->getRepository(Users::class);
                    $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);

                    $em = $doctrine->getManager();
                    $dwellingRep = $doctrine->getRepository(Dwelling::class);
                    $dwelling = $dwellingRep->findOneBy(['id' => $id]);
                    if ($dwelling && ($dwelling->getUser()->getId() == $user->getId())) {
                        if ($dwelling->getDeletedAt() == null) {
                            $dwelling->setDeletedAt(new \DateTimeImmutable('now', new DateTimeZone('Europe/Paris')));
                        } else {
                            $dwelling->setDeletedAt(null);
                        }
                        $em->persist($dwelling);
                        $em->flush();
                        $output = '{"response":"error", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-exclamation"}';
                    } else {
                        $output = '{"response":"error", "message":"Un problème est survenue, veuillez réessayer plus tard", "icon":"fas fa-exclamation"}';
                    }
                } else {
                    $output = '{"response":"error", "message":"Un problème est survenue, veuillez réessayer plus tard", "icon":"fas fa-exclamation"}';
                }
        
            } else {
                $output = '{"response":"error", "message":"Vous n\'avez pas les droits nécessaires pour exécuter cette action", "icon":"fas fa-exclamation"}';

            }
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


}
