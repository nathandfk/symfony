<?php 

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class UsersControllerTest extends WebTestCase {

    public function testUserPage() {
        $client = static::createClient();
        $client->request('GET', '/connexion');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
    public function testH2UserPage()  {
        $client = static::createClient();
        $client->request('GET', '/inscription');
        $this->assertSelectorTextContains('h2', "S'inscrire");
    }
    public function testH2LoginPage()  {
        $client = static::createClient();
        $client->request('GET', '/connexion');
        $this->assertSelectorTextContains('h2', "Se connecter");
    }
    public function testUserFormExist()  {
        $client = static::createClient();
        $client->request('GET', '/inscription');
        $this->assertSelectorExists("form", "Success");
    }
}