<?php 

namespace App\tests\Controller;

use App\Controller\ArticleController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ProductControllerTest extends WebTestCase {

    public function testArticlePage() {
        $client = static::createClient();
        $client->request('GET', '/article');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
    public function testH2ArticlePage()  {
        $client = static::createClient();
        $client->request('GET', '/article');
        $this->assertSelectorTextContains('h2', 'Entrez un article');
    }
    public function testArticleFormExist()  {
        $client = static::createClient();
        $client->request('GET', '/article');
        $this->assertSelectorExists("form", "Success");
    }
}