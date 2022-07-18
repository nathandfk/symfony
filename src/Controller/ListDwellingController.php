<?php

namespace App\Controller;

use App\Entity\Dwelling;
use App\Entity\DwellingMeta;
use App\Entity\Users;
use App\Form\DwellingType;
use App\Repository\DwellingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ListDwellingController extends AbstractController
{
    #[Route('/dwelling/list', name: 'list_dwelling')]
    public function listDwelling(ManagerRegistry $doctrine, Security $security, DwellingRepository $dwellingRepository)
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

                $dwellings = empty($value) ?
                $dwellingRepository->showDwellings("*", "WHERE user_id = $userId ORDER BY id DESC LIMIT 5")
                : $dwellingRepository->showDwellings("*", "WHERE user_id = $userId AND (title LIKE '%$value%' OR city LIKE '%$value%') ORDER BY id DESC LIMIT 5");
                
                
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


}
