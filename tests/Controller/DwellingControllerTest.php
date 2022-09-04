<?php 

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DwellingControllerTest extends WebTestCase {

    public function testDwellingPage() {
        $client = static::createClient();
        $client->request('GET', '/habitations');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
    public function testH1DwellingPage()  {
        $client = static::createClient();
        $client->request('GET', '/habitations');
        $this->assertSelectorTextContains('h1', 'LAISSEZ-VOUS GUIDER');
    }
    public function testDwellingFormExist()  {
        $client = static::createClient();
        $client->request('GET', '/mon-compte/hote');
        $this->assertSelectorExists("form", "Success");
    }
}