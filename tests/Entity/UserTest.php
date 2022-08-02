<?php

namespace App\tests\Entity;

use App\Entity\User;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class UserTest extends KernelTestCase {

    public function getEntity(): Users {
        return (new Users())
        ->setFirstName("Nathan")
        ->setLastName("nathandfk")
        ->setEmail("diafoukanathan@gmail.com")
        ->setPassword("Azerty123")
        ->setCity("Paris")
        ->setAddress("12 rue victor");
    }

    public function getEntityInvalid(): Users{
        return (new Users())
        ->setFirstName("Nathan")
        ->setLastName("nathandfk")
        ->setEmail("diafoukanathangmailcom")
        ->setPassword("Azerty123")
        ->setCity("Paris")
        ->setAddress("12 rue victor");
    }

    public function assertHasErrors(Users $user, int $numberErrors = 0) {
        self::bootKernel();
        $container = static::getContainer();
        $error = $container->get('validator')->validate($user);
        $this->assertCount($numberErrors, $error);
    }

    public function testValidUser(){
        $this->assertHasErrors($this->getEntity(), 0);
    }


    public function testInvalidUser(){
        $this->assertHasErrors($this->getEntityInvalid(), 1);
    }
}

