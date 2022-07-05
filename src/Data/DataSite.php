<?php 
namespace App\Data;

use App\Entity\Dwelling;
use App\Entity\Users;

Class DataSite
{

    public function getDataUser($doctrineParams, string $email = "", int $dwelling = 0){
        if (!empty($email)) {
            $repository = $doctrineParams->getRepository(Users::class);
            $getUser = $repository->findOneBy(['email' => $email]);
            
        } else if ($dwelling > 0){
            $repository = $doctrineParams->getRepository(Dwelling::class);
            $getUser = $repository->findOneBy(['id' => $dwelling]);
        }
        return $getUser;
    }
    public function valid($data, $patern=''){

        if (!empty($data)){ 
            if (!empty($pattern)) {
                if (preg_match($patern, $data)) {
                    return true;
                }
            }
            return true;
        }
        return false;
    }
}