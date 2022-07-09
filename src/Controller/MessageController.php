<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Message;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\DwellingRepository;
use App\Repository\MessageRepository;
use App\Repository\ReservationRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MessageController extends AbstractController
{
    #[Route('/mon-compte/message', name: 'message')]
    public function message(Request $request, Security $security, MessageRepository $messages)
    {   
        
        $security = $security->getUser();
        if (!$security) {
            return $this->redirectToRoute('app_index');
        }
        $user = new Users();
        $userData = $security->getUserIdentifier();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);


        $selected = $messages->showAllMessages("m.id, sender_id, recipient_id, message, m.added_at, u1.first_name as fn1, u1.last_name as ln1, u2.first_name as fn2, u2.last_name as ln2", "WHERE m.sender_id = 1 OR m.recipient_id = 1 GROUP BY sender_id OR recipient_id ORDER BY m.id ASC");
        $details = $messages->showAllMessages("m.id, sender_id, recipient_id, message, m.added_at, u1.first_name as fn1, u1.last_name as ln1, u2.first_name as fn2, u2.last_name as ln2", "WHERE (m.sender_id = 2 AND  m.recipient_id = 1) OR (m.recipient_id = 2 AND m.sender_id=1)");
        

        return $this->render('inc/pages/users/message.html.twig', [
            'carousel' => true,
            'title' => 'Mon compte',
            'form' => $form->createView(),
            'selected' => $selected,
            'details' => $details,
        ]);
    }

}

