<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Posts;
use App\Entity\Users;
use App\Repository\PostsRepository;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class PageController extends AbstractController
{
    // Création de route et envoie des messages de la page contact
    #[Route('/contact', name: 'contact')]
    public function contact(ManagerRegistry $doctrine, Security $security, MailerInterface $mailer): Response
    {

    
        $userRep = $doctrine->getRepository(Users::class);
        $users = $userRep->findAll();
        if ($users) {
            foreach ($users as $user) {
                if (!is_null($user->getDeletedAt())) {
                    $date = new DateTimeImmutable('now', new DateTimeZone("Europe/Paris"));
                    $calcul = strtotime($date->format("Y-m-d H:i:s")) - strtotime($user->getDeletedAt()->format("Y-m-d H:i:s"));
                    if ( $calcul >= 86400*365) {
                        $em = $doctrine->getManager();
                        $userRepDel = $doctrine->getRepository(Users::class);
                        $userDelete = $userRepDel->find($user);
                        $em->remove($userDelete);
                        $em->flush();
                    }
                }
            }
        }

        $dwellingRep = $doctrine->getRepository(Dwelling::class);
        $dwellings = $dwellingRep->findAll();
        if ($dwellings) {
        foreach ($dwellings as $dwel) {
            if (!is_null($dwel->getDeletedAt())) {
                $date = new DateTimeImmutable('now', new DateTimeZone("Europe/Paris"));
                $calcul = strtotime($date->format("Y-m-d H:i:s")) - strtotime($dwel->getDeletedAt()->format("Y-m-d H:i:s"));
                if ( $calcul >= 86400*365) {
                    $em = $doctrine->getManager();
                    $dwelRepDel = $doctrine->getRepository(Dwelling::class);
                    $dwelDelete = $dwelRepDel->find($dwel);
                    $em->remove($dwelDelete);
                    $em->flush();
                }
            }
        }
        }

        if (isset($_POST['btn-contact'])) {
            $em = $doctrine->getManager();
            $auth = $security->getUser();
            $postsRep = $doctrine->getRepository(Posts::class);
            $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
            $firstName = $_POST['first-name'];
            $lastName = $_POST['last-name'];
            $phone = $_POST['contact-phone'];
            $emailUser = $_POST['contact-email'];
            $object = $_POST['contact-object'];
            $message = $_POST['contact-message'];
            if (!empty($firstName) && !empty($lastName) && !empty($phone) && !empty($emailUser) && !empty($object)) {
                if (filter_var($emailUser, FILTER_VALIDATE_EMAIL)) {
                        $post = new Posts();
                        if ($auth) {
                            $userRep = $doctrine->getRepository(Users::class);
                            $user = $userRep->findOneBy(['email' => $auth->getUserIdentifier()]);
                            $post->setUser($user);
                        }
                        // Insertion en base de données du message
                        $post->setType("CONTACT");
                        $post->setTitle($object);
                        $abstract = "$firstName, $lastName";
                        $post->setAbstract($abstract);
                        $mess = "'$emailUser', '$phone', $message";
                        $post->setDescription($mess);
                        $em->persist($post);
                        $em->flush();
                        $this->addFlash('success', "Nous avons bien reçu votre message.");
                        // Confirmation de mail
                        if ($posts) {
                            foreach ($posts as $post) {
                                $email1 = (new Email())
                                    ->from($post->getDescription())
                                    ->to($emailUser)
                                    ->subject('Contact AtypikHouse')
                                    ->text('Contact')
                                    ->html("
                                    <div>
                                    <p>Bonjour <b>$firstName</b></p>
                                    <p>Nous avons bien reçu votre message</p>
                                    <p>Récapitulatif</p>
                                    <div>Prénom: <b>$firstName</b></div>
                                    <div>Nom: <b>$lastName</b></div>
                                    <div>Email: <b>$emailUser</b></div>
                                    <div>Objet: <b>$object</b></div>
                                    <div>Message: <b>$message</b></div>
                                    <p>Merci de nous avoir contacter nous allons traité votre demande dans les moindres détails et nous revenons vers vous.</p>
                                    <p>L'équipe AtypikHouse.</p>
                                    <div style='text-align: center;'>
                                    <a href='https://f2i-dev14-nd.nathandfk.fr'><img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'></a>
                                    </div>
                                    ");

                                $mailer->send($email1);


                                $email2 = (new Email())
                                    ->from($emailUser)
                                    ->to($post->getDescription())
                                    ->subject('Contact AtypikHouse')
                                    ->text('Contact')
                                    ->html("
                                    <div>
                                    <p>Ce message est à destination des modérateurs et administrateurs de AtypikHouse</p>
                                    <p>Ceci est un message provenant de la page contact du site AtypikHouse</p>
                                    <p>Récapitulatif</p>
                                    <div>Prénom: <b>$firstName</b></div>
                                    <div>Nom: <b>$lastName</b></div>
                                    <div>Email: <b>$emailUser</b></div>
                                    <div>Objet: <b>$object</b></div>
                                    <div>Message: <b>$message</b></div>
                                    <p>L'équipe AtypikHouse.</p>
                                    <div style='text-align: center;'>
                                    <a href='https://f2i-dev14-nd.nathandfk.fr'><img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'></a>
                                    </div>
                                    ");

                                $mailer->send($email2);
                                return $this->redirectToRoute("contact");
                            }
                        }
                } else {
                    $this->addFlash('error', "Votre adresse mail est invalide");
                }
            } else {
                $this->addFlash('error', "Un ou plusieurs champs obligatoires sont vides");
            }
        }
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('inc/pages/simple-pages/contact.html.twig', [
            'controller_name' => 'CategoryController',
            'title' => 'Contactez-nous',
            'carousel' => false,
            'calendar' => $calendar,
        ]);
    }

    #[Route('/mentions-legales', name: 'legalnotice')]
    public function legalnotice(): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('inc/pages/simple-pages/legalnotice.html.twig', [
            'carousel' => true,
            'title' => 'Mentions légales',
            'calendar' => $calendar,
        ]);
    }

    #[Route('/conditions-generales-de-vente', name: 'cgv')]
    public function cgv(): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('inc/pages/simple-pages/cgv.html.twig', [
            'carousel' => true,
            'title' => 'Conditions générales de vente',
            'calendar' => $calendar,
        ]);
    }

    #[Route('/conditions-generales-dutilisation', name: 'cgu')]
    public function cgu(): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('inc/pages/simple-pages/cgu.html.twig', [
            'carousel' => true,
            'title' => 'Conditions générales d\'utilisation',
            'calendar' => $calendar,
        ]);
    }

    #[Route('/politique-de-confidentialite', name: 'confidentiality')]
    public function confidentiality(): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('inc/pages/simple-pages/confidentiality.html.twig', [
            'carousel' => true,
            'title' => 'Politique de confidentialité',
            'calendar' => $calendar,
        ]);
    }

    #[Route('/foire-aux-questions', name: 'faq')]
    public function faq(): Response
    {
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('inc/pages/simple-pages/faq.html.twig', [
            'carousel' => true,
            'title' => 'Foire aux questions',
            'calendar' => $calendar,
        ]);
    }

    #[Route('/a-propos', name: 'about')]
    public function about(PostsRepository $postsRep): Response
    {
        $posts = $postsRep->showPosts("title, type, abstract, description", "WHERE type='ABOUTTITLE' OR type='ABOUTABSTRACT' OR type='ABOUTDESCRIPTION' OR type='ABOUTPIC'");
        $calendar = new Calendar();
        $calendar = $calendar::calendar();
        return $this->render('inc/pages/simple-pages/about.html.twig', [
            'carousel' => true,
            'title' => 'A propos',
            'calendar' => $calendar,
            'datas' => $posts,
        ]);
    }
    
}
