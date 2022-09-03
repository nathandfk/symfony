<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Posts;
use App\Entity\Users;
use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;

class SettingsController extends AbstractController
{
    // Création d'une route et Gestion des paramètres
    // Ajout et modifications des paramètres
    #[Route('/account/settings', name: 'account_settings')]
    public function settings(ManagerRegistry $doctrine, Security $security, MailerInterface $mailer, PostsRepository $postsRepExist)
    {
        $auth = $security->getUser();
        if (!isset($_POST['email_admin_setting']) && !isset($_POST['message_setting'])) {
            return $this->redirectToRoute('app_index');
        }
        $output = '{"response":"error", "message":"Cette image est trop volumineuse", "icon":"fas fa-exclamation"}';
        if ($auth) {
            $roles = $auth->getRoles();
            if ((in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MODERATOR', $roles))) {
                $message = $_POST['message_setting'];
                $email = $_POST['email_admin_setting'];
                $tax = $_POST['tax_setting'];
                $title = $_POST['home_title_setting'];
                $aboutTitle = $_POST['about_title_setting'];
                $abstract = $_POST['abstract_title_setting'];
                $description = $_POST['about_description_setting'];
                $equipment = $_POST['equipment_setting'];
                $type = $_POST['type_setting'];
                $homepic = "";
                $aboutpic = "";
                $pictures = ["about_picture_setting", "home_picture_setting"];
                foreach ($pictures as $picture) {
                    // Vérifion les input images présente dans nos paramètres si elles sont vides ou non
                    if (isset($_FILES[$picture]) && !empty($_FILES[$picture])) {
                        $img_name = $_FILES[$picture]['name'];
                        if (!empty($img_name)) {
                            $img_size = $_FILES[$picture]['size'];
                            $img_type = $_FILES[$picture]['type'];
                            $tmp_name = $_FILES[$picture]['tmp_name'];
                            $error = $_FILES[$picture]['error'];
                            // Vérification des images
                            if ($img_size > 1024*1024*2) {
                                $output = '{"response":"error", "message":"Cette image est trop volumineuse", "icon":"fas fa-exclamation"}';
                                return new JsonResponse($output);
                            } else if(!preg_match('/\.(jpg|jpeg|png)$/',$img_name)) {
                                $output = '{"response":"error", "message":"Le format d\'image n\'est pas correct", "icon":"fas fa-exclamation"}';
                                return new JsonResponse($output);
                            } else if ($error) {
                                $output = '{"response":"error", "message":"Une erreur s\'est produite, veuillez recommencer", "icon":"fas fa-exclamation"}';
                                return new JsonResponse($output);
                            } else {
                                $img_name_text = uniqid("IMG-", false).'-'.$img_name;
                                if ($picture == "home_picture_setting") {
                                    $homepic = $img_name_text;
                                } else {
                                    $aboutpic = $img_name_text;
                                }
                                $img_upload_path = $this->getParameter('pictures_directory_pages')."/".$img_name_text;
                                move_uploaded_file($tmp_name, $img_upload_path);

                                switch ($img_type) {
                                    case 'image/jpeg':
                                        $img = imagecreatefromjpeg($img_upload_path);
                                        imagejpeg($img, $img_upload_path, 20);  
                                        break;
                                }
                            }
                        }
                    }
                }
                if (!empty($message) && !empty($tax) && !empty($title) && !empty($email) && !empty($aboutTitle) && !empty($abstract) && !empty($description)) {
                    // Vérification de l'email
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Les données avec true en dernier son des valeurs uniques,
                    // Ce sont des valeurs que le système renseigne qu'une seule fois
                    // Une fois que ses données existent le système ne fera plus que des maj
                    $data = [
                        'welcome' => ["Message de bienvenue lors d'une réservation", $message, true],
                        'hometitle' => ["Grand titre de la page d'accueil", $title, true],
                        'homepic' => ["Image page d'accueil", $homepic, true],
                        'abouttitle' => ["Grand titre de la page à propos", $aboutTitle, true],
                        'aboutabstract' => ["Résumé de la page à propos", $abstract, true],
                        'aboutdescription' => ["Description de la page à propos", $description, true],
                        'aboutpic' => ["Image page à propos", $aboutpic, true],
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
                        // Vérification des données et insertions
                        if ($value[2] == true) {
                            $exist = $postRep->findOneBy(['type' => strtoupper($key)]);
                            if ($exist) {
                                $exist->setUser($user);
                                if (!empty($value[1])) {
                                    $exist->setDescription($value[1]);
                                }
                                $exist->setTitle($value[0]);
                                $exist->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris')));
                                $em->persist($exist);
                                $em->flush();
                                continue;
                            }
                        } else if (empty($value[1])) {
                            continue;
                        // Vérifions si la donnée dans notre boucle est une tax
                        // Si elle est vérifions si elle est de type int, si elle n'est pas en coupe la boucle
                        } else if ($key == 'tax'){
                            if (!is_int($value[1])) {
                                continue;
                            }
                        }

                        // Vérifions si l'équipement ou le type que nous renseignons existe déjà
                        // Si elle existe renvoyons une erreur avec un message
                        $exists = $value[1];
                        $postsExists = $postsRepExist->showPosts("*", "WHERE (type='EQUIPMENT' AND description = '$exists') OR (type='TYPE' AND description = '$exists')");
                        foreach ($postsExists as $postExist) {
                            if ($postExist) {
                                $output = '{"response":"error", "message":"Le type ou l\'équipement renseigné existe déjà", "icon":"fas fa-exclamation"}';
                                return new JsonResponse($output);
                            }
                        }
                        $post = new Posts();
                        
                        $post->setUser($user);
                        $post->setType(strtoupper($key));
                        $post->setTitle($value[0]);
                        $post->setDescription($value[1]);

                        $em->persist($post);
                        $em->flush();


                        // Insertion du type et de l'équipement
                        if ($key == "type") {
                            $notif = new Posts();
                            $notif->setUser($user);
                            $notif->setType("NOTIFICATION");
                            $notif->setTitle("AtypikHouse : Type d'habitation");
                            $notif->setAbstract("Une modification a été appliquée sur les types d'habitations");
                            $notif->setDescription("");
                            $em->persist($notif);
                            $em->flush();
                        } else if ($key == "equipment"){
                            $notif = new Posts();
                            $notif->setUser($user);
                            $notif->setType("NOTIFICATION");
                            $notif->setTitle("AtypikHouse : Équipement");
                            $notif->setAbstract("Une modification a été appliquée sur les équipements");
                            $notif->setDescription("");
                            $em->persist($notif);
                            $em->flush();
                        }

                        $userRep = $doctrine->getRepository(Users::class);
                        $users = $userRep->findBy(["statut" => true, "account" => true]);
                        foreach ($users as $user) {
                            if ($user->getDeletedAt() == null && in_array('ROLE_HOST', $user->getRoles())) {
                                // Récupération de l'email de l'administrateur
                                // Envoie de l'email aux hôtes pour leur informer des nouvelles modifications
                                $postsRep = $doctrine->getRepository(Posts::class);
                                $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                                $mail = $user->getEmail();
                                $firstName = $user->getFirstName();
                                if ($posts) {
                                    foreach ($posts as $post) {
                                        $email = (new Email())
                                            ->from($post->getDescription())
                                            ->to($mail)
                                            ->subject('Modification interne')
                                            ->text('Modification interne')
                                            ->html("
                                            <div>
                                            <p>Bonjour $firstName,</p>
                                            <p>Nous vous informons que des ajouts au niveau du type d'habitation ou équipements ont été fait sur notre site internet AtypikHouse.</p>
                                            <p>L'équipe AtypikHouse.</p>
                                            <div style='text-align: center;'>
                                            <a href='https://f2i-dev14-nd-hh-mr.nathandfk.fr'><img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'></a>
                                            </div>
                                            ");

                                        $mailer->send($email);
                                    }
                                }
                            }
                        }
                    }
                    $output = '{"response":"success", "message":"Données insérées avec succès !", "icon":"fas fa-exclamation"}';
                    } else {
                        $output = '{"response":"success", "message":"L\'adresse mail n\'est pas correcte", "icon":"fas fa-exclamation"}';
                    }
                } else {
                    $output = '{"response":"success", "message":"Un ou plusieurs champs obligatoires n\'ont pas été renseignés", "icon":"fas fa-exclamation"}';
                }
            } else {
                $output = '{"response":"error", "message":"Vous n\'avez pas les droits nécessaires", "icon":"fas fa-exclamation"}';
            }
            
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);
    }


    // Barre de recherche des équipements et types 
    #[Route('/account/settings/search', name: 'account_settings_search')]
    public function search(Security $security, PostsRepository $postRep, PaginatorInterface $paginator, Request $request): Response
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
                $postRep->showPosts("id, type, title, description, deleted_at", "WHERE type IN ('EQUIPMENT', 'TYPE') ORDER BY id DESC")
                : $postRep->showPosts("id, type, title, description, deleted_at", "WHERE type IN ('EQUIPMENT', 'TYPE') AND (title LIKE '%$value%' OR description LIKE '%$value%') ORDER BY id DESC");
                
                $posts = $paginator->paginate(
                $posts,
                $request->query->getInt('page', 1),
                5);
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




    // Retourne les logements signalés 
    #[Route('/account/settings/signal', name: 'account_settings_signal')]
    public function signal(ManagerRegistry $doctrine, Security $security, PostsRepository $postRep, PaginatorInterface $paginator, Request $request): Response
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        $value = $data['value'];
        if ($auth) {
            $roles = $auth->getRoles();
            $em = $doctrine->getManager();

            $userRep = $doctrine->getRepository(Users::class);
            $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);

            $postRep = $doctrine->getRepository(Posts::class);
            
            $posts = in_array('ROLE_ADMIN', $roles) || in_array('ROLE_MODERATOR', $roles) 
            ? $postRep->findBy(['type' => 'SIGNAL'], ['id' => 'DESC'])
            : $postRep->findBy(['user' => $user->getId(),'type' => 'SIGNAL'], ['id' => 'DESC']);
            
            $final = [];

            foreach ($posts as $post) {
                $dwelRep = $doctrine->getRepository(Dwelling::class);
                $dwel = $dwelRep->findOneBy(['id' => $post->getDwelling()->getId()]);

                $userRep = $doctrine->getRepository(Users::class);
                $user = $userRep->findOneBy(['id' => $post->getUser()->getId()]);
                $data = [$user->getFirstName(), $user->getLastName(), $user->getEmail(), $dwel->getId(), $dwel->getTitle(), $post->getAddedAt(),  $post->getStatut(), $post->getId()];
                array_push($final, $data);
            }
            $final = $paginator->paginate(
                $final,
                $request->query->getInt('page', 1),
                5);
            $response = [
                'response' => 'success', 
                'message' => "",
                'datas' => $final,
            ];

        } else {
            $response = [
                'response' => 'success', 
                'message' => "Vous ne vous êtes pas authentifié",
                'datas' => '',
            ];
        }
        return $this->render('inc/modules/settings/signal.html.twig', $response);
    }


    // Retourne les paramètres déjà renseignés sur les formulaire en value
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
                $aboutTitle = $postRep->findOneBy(['type' => strtoupper("abouttitle")]);
                $abstract = $postRep->findOneBy(['type' => strtoupper("aboutabstract")]);
                $description = $postRep->findOneBy(['type' => strtoupper("aboutdescription")]);
                
                $adminEmail = $postRep->findOneBy(['type' => strtoupper("admin_email")]);

                $valueWel = $welcome ? str_replace("\n", '', $welcome->getDescription()) : '';
                $valueTax = $tax ? $tax->getDescription() : '';
                $title = $homeTitle ? $homeTitle->getDescription() : '';
                $aboutTitle = $aboutTitle ? $aboutTitle->getDescription() : '';
                $abstract = $abstract ? $abstract->getDescription() : '';
                $description = $description ? $description->getDescription() : '';


                $email = $adminEmail ? $adminEmail->getDescription() : '';
                
                $output = ["response"=>"success", "message"=>"Vous n\'avez pas les droits nécessaires", "icon"=>"fas fa-exclamation", 
                    "datas" => ["message_setting"=>$valueWel, "tax_setting"=>$valueTax, 
                    "home_title_setting"=>$title, "email_admin_setting"=>$email, 
                    "about_title_setting"=>$aboutTitle, "abstract_title_setting"=>$abstract,
                    "about_description_setting"=>$description]];

            } else {
                $output = ["response"=>"error", "message"=>"Vous n\'avez pas les droits nécessaires", "icon"=>"fas fa-exclamation", "datas" => ""];
            }
            
        } else {
            $output = ["response"=>"error", "message"=>"Vous ne vous êtes pas authentifié", "icon"=>"fas fa-exclamation", "datas" => ""];
        }
        return $this->render('inc/modules/settings/params.html.twig', $output);
    }


    // Inscription à la newsletter
    #[Route('/newsletter', name: 'register_newsletter')]
    public function newsletter(ManagerRegistry $doctrine, Security $security, MailerInterface $mailer)
    {
        $auth = $security->getUser();
        if (empty($_POST['newsletter'])) {
            return $this->redirectToRoute("app_index");
        }
        $output = '{"response":"error", "message":"Une erreur est survenue, veuillez recommencer", "icon":"fas fa-exclamation"}';
        $email = $_POST['newsletter'];
        if (!empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                // Vérifions si l'adresse mail existe déjà
                $postsRep = $doctrine->getRepository(Posts::class);
                $posts = $postsRep->findBy(['description' => $email, 'type' => 'NEWSLETTER']);
                foreach ($posts as $post) {
                    if ($post) {
                        $output = '{"response":"error", "message":"Cette adresse mail est déjà inscrite dans notre liste", "icon":"fas fa-exclamation"}';
                        return new JsonResponse($output);
                    }
                }
                // Insertion en base de données si l'adresse mail n'existe pas 
                $em = $doctrine->getManager();
                $post = new Posts();
                if ($auth) {
                    $userRep = $doctrine->getRepository(Users::class);
                    $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);
                    $post->setUser($user);
                }
                $post->setDescription($email);
                $post->setAbstract('');
                $post->setTitle('Inscription à la newsletter');
                $post->setType('NEWSLETTER');
                $em->persist($post);
                $em->flush();


                // Email de confirmation à la newsletter
                $postsRep = $doctrine->getRepository(Posts::class);
                $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                if ($posts) {
                    foreach ($posts as $post) {
                        $email = (new Email())
                            ->from($post->getDescription())
                            ->to($email)
                            ->subject('Inscription à la newsletter de AtypikHouse')
                            ->text('Inscription newsletter')
                            ->html("
                            <div>
                            <p>Bonjour,</p>
                            <p>Vous êtes bien inscrit à notre newsletter</p>
                            <p>Vous allez désormais recevoir les offres et actualités de AtypikHouse.</p>
                            <p>Toute fois vous pouvez faire valoir vos droits en nous adressant un mail à <a href='mailto:legales@atypikhouse.com'>legales@atypikhouse.com</a></p>
                            <p>Profitez pleinement de notre site internet et de tout ce qu'il vous offre.</p>
                            <p>L'équipe AtypikHouse.</p>
                            <div style='text-align: center;'>
                            <img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                            </div>
                            ");

                        $mailer->send($email);
                    }
                }

                $output = '{"response":"success", "message":"Vous vous êtes bien inscrit à notre newsletter", "icon":"fas fa-check"}';
            } else {
                $output = '{"response":"error", "message":"Votre email est incorrect", "icon":"fas fa-exclamation"}';
            }
        }
        return new JsonResponse($output);
    }


    // Mise à jour des types et équipements
    #[Route('/account/settings/update', name: 'account_settings_update')]
    public function update(ManagerRegistry $doctrine, Security $security, MailerInterface $mailer)
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

                        // Informons nos hôtes que des mises à jour ont été faite
                        $userRep = $doctrine->getRepository(Users::class);
                        $users = $userRep->findBy(["statut" => true, "account" => true]);
                        foreach ($users as $user) {
                            if ($user->getDeletedAt() == null && in_array('ROLE_HOST', $user->getRoles())) {
                                $postsRep = $doctrine->getRepository(Posts::class);
                                $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                                $mail = $user->getEmail();
                                $firstName = $user->getFirstName();
                                if ($posts) {
                                    foreach ($posts as $post) {
                                        $email = (new Email())
                                            ->from($post->getDescription())
                                            ->to($mail)
                                            ->subject('Modification interne')
                                            ->text('Modification interne')
                                            ->html("
                                            <div>
                                            <p>Bonjour $firstName,</p>
                                            <p>Nous vous informons que des modifications au niveau du type d'habitation ou équipements ont été appliqué sur notre site internet AtypikHouse.</p>
                                            <p>L'équipe AtypikHouse.</p>
                                            <div style='text-align: center;'>
                                            <a href='https://f2i-dev14-nd-hh-mr.nathandfk.fr'><img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'></a>
                                            </div>
                                            ");

                                        $mailer->send($email);
                                    }
                                }
                            }
                        }
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


    // Suppression des types et équipements
    #[Route('/account/settings/delete', name: 'account_delete')]
    public function delete(ManagerRegistry $doctrine, Security $security, MailerInterface $mailer)
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

            // Informons nos hôtes que des mises à jour ont été faite
            $userRep = $doctrine->getRepository(Users::class);
            $users = $userRep->findBy(["statut" => true, "account" => true]);
            foreach ($users as $user) {
                if ($user->getDeletedAt() == null && in_array('ROLE_HOST', $user->getRoles())) {
                    $postsRep = $doctrine->getRepository(Posts::class);
                    $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                    $mail = $user->getEmail();
                    $firstName = $user->getFirstName();
                    if ($posts) {
                        foreach ($posts as $post) {
                            $email = (new Email())
                                ->from($post->getDescription())
                                ->to($mail)
                                ->subject('Modification interne')
                                ->text('Modification interne')
                                ->html("
                                <div>
                                <p>Bonjour $firstName,</p>
                                <p>Nous vous informons que des modifications au niveau du type d'habitation ou équipements ont été appliqué sur notre site internet AtypikHouse.</p>
                                <p>L'équipe AtypikHouse.</p>
                                <div style='text-align: center;'>
                                <a href='https://f2i-dev14-nd-hh-mr.nathandfk.fr'><img src='https://f2i-dev14-nd-hh-mr.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'></a>
                                </div>
                                ");

                            $mailer->send($email);
                        }
                    }
                }
            }
            $output = '{"response":"success", "message":"Les modifications ont bien été appliquées", "icon":"fas fa-exclamation", "redirect":"/logout"}';
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation", "redirect":""}';
        }
        return new JsonResponse($output);
    }


    // Suppression d'un compte
    // Les comptes utilisateurs sont automatiquements et définitivements supprimés au bout d'un an
    #[Route('/account/delete', name: 'delete')]
    public function deleteAccount(ManagerRegistry $doctrine, Request $request, Security $security)
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
