<?php

namespace App\Controller;

use App\Data\Calendar;
use App\Entity\Dwelling;
use App\Entity\Message;
use App\Entity\Posts;
use App\Entity\Reservation;
use App\Entity\ReservationMeta;
use App\Entity\Users;
use App\Repository\DwellingRepository;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Error;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class LikesCommentsController extends AbstractController
{
    #[Route('/product/likes', name: 'likes')]
    public function likes(ManagerRegistry $doctrine, Security $security)
    {
        $auth = $security->getUser();
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            return $this->redirectToRoute('app_index');
        }
        if ($auth) {
            $datas = [
                '_cleanliness' => $data['_cleanliness'],
                '_precision' => $data['_precision'],
                '_communication' => $data['_communication'],
                '_location' => $data['_location'],
                '_arrival' => $data['_arrival'],
                '_value_for_money' => $data['_value_for_money'],
            ];
            foreach ($datas as $key => $value) {
                if (empty($value)) {
                    return new JsonResponse('{"response":"error", "message":"Vous n\'avez pas noté tous les critères demandés", "icon":"fas fa-exclamation"}');
                }
            }
            foreach ($datas as $key => $value) {
                $posts = new Posts();

            }
        } else {
            $output = '{"response":"error", "message":"Vous ne vous êtes pas authentifié", "icon":"fas fa-exclamation"}';
        }
        return new JsonResponse($output);

    }



}
