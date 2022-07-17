<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Posts;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\PostsRepository;
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
    public function settings(ManagerRegistry $doctrine, Security $security)
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
                $email = $data['email_admin_setting'];
                $tax = $data['tax_setting'];
                $title = $data['home_title_setting'];
                $type = $data['type_setting'];
                $equipment = $data['equipment_setting'];
                if (!empty($message) && !empty($tax) && !empty($title) && !empty($email)) {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $data = [
                        'welcome' => ["Message de bienvenue lors d'une réservation", $message, true],
                        'hometitle' => ["Grand titre de la page d'accueil", $title, true],
                        'admin_email' => ["Utilisé pour les mails du site", $email, true],
                        'tax' => ["Frais de service", $tax, true],
                        'type' => ["Type d'habitation, exemple: Yourte", $type, false],
                        'equipment' => ["Équipements disponibles dans un habitat", $equipment, false],
                    ];
                    foreach ($data as $key => $value) {
                        $repository = $doctrine->getRepository(Users::class);
                        $postRep = $doctrine->getRepository(Posts::class);
                        $user = $repository->findOneBy(['email' => $auth->getUserIdentifier()]);
                        $em = $doctrine->getManager();
                        if ($value[2] == true) {
                            $exist = $postRep->findOneBy(['type' => strtoupper($key)]);
                            if ($exist) {
                                $exist->setUser($user);
                                $exist->setDescription($value[1]);
                                $exist->setTitle($value[0]);
                                $exist->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                                $em->persist($exist);
                                $em->flush();
                                continue;
                            }
                        } else if (empty($value[1])) {
                            continue;
                        } else if ($key == 'tax'){
                            if (!is_int($value[1])) {
                                continue;
                            }
                        }
                        $post = new Posts();
                        
                        $post->setUser($user);
                        $post->setType(strtoupper($key));
                        $post->setTitle($value[0]);
                        $post->setDescription($value[1]);

                        $em->persist($post);
                        $em->flush();
                    }
                    $output = '{"response":"success", "message":"Données insérées avec succès !", "icon":"fas fa-exclamation"}';
                    } else {
                        $output = '{"response":"success", "message":"L\'adresse mail n\'est pas correcte", "icon":"fas fa-exclamation"}';
                    }
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


    #[Route('/account/settings/search', name: 'account_settings_search')]
    public function search(ManagerRegistry $doctrine, Security $security, PostsRepository $postRep): Response
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $value = $data['value'];
        if ($auth) {
            $roles = $auth->getRoles();
            if (in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MODERATOR', $roles)) {
                
                $posts = empty($value) ?
                $postRep->showPosts("id, type, title, description, deleted_at", "WHERE type IN ('EQUIPMENT', 'TYPE') ORDER BY id DESC LIMIT 5")
                : $postRep->showPosts("id, type, title, description, deleted_at", "WHERE type IN ('EQUIPMENT', 'TYPE') AND (title LIKE '%$value%' OR description LIKE '%$value%') ORDER BY id DESC LIMIT 5");
                
                $response = [
                    'response' => 'success', 
                    'message' => "",
                    'datas' => $posts,
                ];
            } else {
                $response = [
                    'response' => 'error', 
                    'message' => "Vous n'avez pas les droits nécessaires",
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
        return $this->render('inc/modules/settings/search.html.twig', $response);
    }


    #[Route('/account/settings/show', name: 'account_settings_show')]
    public function show(ManagerRegistry $doctrine, Security $security)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $roles = $auth->getRoles();
            if (in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MODERATOR', $roles)) {
                
                $postRep = $doctrine->getRepository(Posts::class);
                $welcome = $postRep->findOneBy(['type' => strtoupper("welcome")]);
                $tax = $postRep->findOneBy(['type' => strtoupper("tax")]);
                $homeTitle = $postRep->findOneBy(['type' => strtoupper("hometitle")]);
                $adminEmail = $postRep->findOneBy(['type' => strtoupper("admin_email")]);
                $valueWel = $welcome ? str_replace("\n", '', $welcome->getDescription()) : '';
                $valueTax = $tax ? $tax->getDescription() : '';
                $title = $homeTitle ? $homeTitle->getDescription() : '';
                $email = $adminEmail ? $adminEmail->getDescription() : '';
                $output = '{"response":"success", "message":"Vous n\'avez pas les droits nécessaires", "icon":"fas fa-exclamation", "welcome":"'.$valueWel.'", "tax":"'.$valueTax.'", "title":"'.$title.'", "email":"'.$email.'"}';

            } else {
                $output = '{"response":"error", "message":"Vous n\'avez pas les droits nécessaires", "icon":"fas fa-exclamation"}';
            }
            
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }

    #[Route('/account/settings/update', name: 'account_settings_update')]
    public function update(ManagerRegistry $doctrine, Security $security)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $roles = $auth->getRoles();
            if (in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MODERATOR', $roles)) {
                $id = $data['id'];
                $value = $data['value'];

                $em = $doctrine->getManager();
                $repository = $doctrine->getRepository(Posts::class);
                $findPost = $repository->find($id);
                if ($findPost && !empty($id) && !empty($value)) {
                    $repository = $doctrine->getRepository(Users::class);
                    $user = $repository->findOneBy(['email' => $auth->getUserIdentifier()]);
    
                    $findPost->setUser($user);
                    $findPost->setDescription($value);
                    $findPost->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                    $em->persist($findPost);
                    $em->flush();
                    $output = '{"response":"success", "message":"Les modifications ont été appliqué avec succès", "icon":"fas fa-exclamation"}';
                } else {

                    $output = '{"response":"success", "message":"Une erreure est survenue, merci de recommencer", "icon":"fas fa-exclamation"}';
                }


            } else {
                $output = '{"response":"error", "message":"Vous n\'avez pas les droits nécessaires", "icon":"fas fa-exclamation"}';
            }
            
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


    #[Route('/account/settings/delete', name: 'account_delete')]
    public function delete(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $id = $data['id'];
        $em = $doctrine->getManager();
        $repository = $doctrine->getRepository(Posts::class);
        $findPost = $repository->find($id);
        if ($auth) {
            $repository = $doctrine->getRepository(Users::class);
            $user = $repository->findOneBy(['email' => $auth->getUserIdentifier()]);
            
            $findPost->setUser($user);
            $delete = is_null($findPost->getDeletedAt()) 
            ? new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'))
            : null;
            $findPost->setDeletedAt($delete);
            $findPost->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
            $em->persist($findPost);
            $em->flush();
            $output = '{"response":"success", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-exclamation", "redirect":"/logout"}';
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation", "redirect":""}';
        }
        return new JsonResponse($output);
    }


    #[Route('/account/delete', name: 'delete')]
    public function deleteAccount(ManagerRegistry $doctrine, Request $request, Security $security, UsersRepository $dataUsers, DwellingRepository $dwelRep, PaginatorInterface $paginator)
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
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation", "redirect":""}';
        }
        return new JsonResponse($output);
    }

}
