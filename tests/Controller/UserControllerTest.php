<?php 

namespace App\tests\Controller;

use App\Controller\UserController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class UserControllerTest extends WebTestCase {

    public function testUserPage() {
        $client = static::createClient();
        $client->request('GET', '/connexion');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
    public function testH2UserPage()  {
        $client = static::createClient();
        $client->request('GET', '/inscription');
        $this->assertSelectorTextContains('h2', 'Inscrivez-vous');
    }
    public function testUserFormExist()  {
        $client = static::createClient();
        $client->request('GET', '/inscription');
        $this->assertSelectorExists("form", "Success");
    }
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "Offrez vous de meilleurs vacances d'été partout en Europe");
    }
}