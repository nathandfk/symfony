<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Message;
use App\Entity\Users;
use App\Repository\MessageRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MessageController extends AbstractController
{
    #[Route('/mon-compte/message/selected', name: 'message_selected')]
    public function selected(ManagerRegistry $doctrine, Security $security, MessageRepository $messages)
    {   
        
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $repository = $doctrine->getRepository(Users::class);
            $senderId = $repository->findOneBy(["email" => $auth->getUserIdentifier()]);
            $senderId = $senderId->getId();

            // $selected = $messages->showAllMessages("msg_id, sender_id, recipient_id, message, m.added_at, u1.first_name as fn1, u1.last_name as ln1, u2.first_name as fn2, u2.last_name as ln2", "WHERE m.sender_id = 1 OR m.recipient_id = 1 GROUP BY sender_id OR recipient_id ORDER BY m.id ASC");
            $selected = $messages->showAllMessages("sender_id, recipient_id, message, m.added_at, u1.first_name as fn1, u1.last_name as ln1, u2.first_name as fn2, u2.last_name as ln2", "WHERE m.sender_id = $senderId OR m.recipient_id = $senderId ORDER BY m.id DESC");
            
            $array = [];
            $element = [];
            foreach ($selected as $elm) {
                $id1 = $elm['sender_id'];
                $id2 = $elm['recipient_id'];
                $save = [$id1, $id2];
                if (in_array([$id1,$id2], $array) || in_array([$id2,$id1], $array)) {
                    continue;
                }
                array_push($element, $elm);
                array_push($array, $save);
            }
            $response = ['selected' => $element, 'message' => ""];
        } else {
            $response = ['selected' => '', 'message' => "Vous ne vous êtes pas authentifier"];
        }
        return $this->render('inc/modules/messages/selected.html.twig', $response);

    }

    #[Route('/mon-compte/message/details', name: 'message_details')]
    public function details(ManagerRegistry $doctrine, Security $security, MessageRepository $messages)
    {   
        
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $recipient = $data['id'];

            $repository = $doctrine->getRepository(Users::class);
            $recipientId = $repository->findOneBy(["id" => $recipient]);
            $senderId = $repository->findOneBy(["email" => $auth->getUserIdentifier()]);

            $recipientId = $recipientId->getId();
            $senderId = $senderId->getId();
            
            $details = $messages->showAllMessages("m.id, sender_id, recipient_id, message, m.added_at, u1.first_name as fn1, u1.last_name as ln1, u2.first_name as fn2, u2.last_name as ln2", "WHERE (m.sender_id = $recipientId AND  m.recipient_id = $senderId) OR (m.recipient_id = $recipientId AND m.sender_id=$senderId) ORDER BY id ASC");
            
            $response = ['details' => $details, 'message' => ""];
        } else {
            $response = ['details' => '', 'message' => "Vous ne vous êtes pas authentifier"];
        }
        return $this->render('inc/modules/messages/details.html.twig', $response);

    }
    #[Route('/mon-compte/message/send', name: 'message_send')]
    public function send(Request $request, ManagerRegistry $doctrine, Security $security, MessageRepository $messages)
    {   
        
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $recipient = $data['id'];
            $message = $data['message'];

            $repository = $doctrine->getRepository(Users::class);
            $recipientId = $repository->findOneBy(["id" => $recipient]);
            $senderId = $repository->findOneBy(["email" => $auth->getUserIdentifier()]);

            $em = $doctrine->getManager();
            $messages = new Message();
            $messages->setSender($senderId);
            $messages->setRecipient($recipientId);
            $messages->setMessage($message);
            $em->persist($messages);
            $em->flush();
            $output = '{"response":"success", "message":"Modification réussie", "icon":"fas fa-thumbs-up"}';
            $response = ['details' => '', 'selected' => '', 'message' => "Une erreur s'est produite, vous ne pouvez pas votre message. Réessayer ultérieurement"];
            
        } else {
            $output = '{"response":"success", "message":"Modification réussie", "icon":"fas fa-thumbs-up"}';
        }     
    return new JsonResponse($output);

    }

}