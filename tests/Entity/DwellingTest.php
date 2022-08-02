<?php

namespace App\tests\Entity;

use App\Entity\Dwelling;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DwellingTest extends WebTestCase {

    public function getEntity(): Dwelling {
        return (new Dwelling())
        ->setTitle("Nathan")
        ->setDescription("nathandfk")
        ->setAbstract("Lorem ipsum")
        ->setState("Lorem ipsum");
    }

    public function getEntityInvalid(): Dwelling {
        return (new Dwelling())
        ->setTitle("Nathan")
        ->setDescription("nathandfk")
        ->setAbstract("")
        ->setState("Lorem ipsum");
    }

    public function assertHasErrors(Dwelling $dwelling, int $numberErrors = 0) {
        self::bootKernel();
        $container = static::getContainer();
        $error = $container->get('validator')->validate($dwelling);
        $this->assertCount($numberErrors, $error);
    }

    public function testValidDwelling(){
        $this->assertHasErrors($this->getEntity(), 0);
    }


    public function testInvalidDwelling(){
        $this->assertHasErrors($this->getEntityInvalid(), 1);
    }
}

