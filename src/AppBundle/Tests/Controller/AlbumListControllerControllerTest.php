<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AlbumListControllerControllerTest extends WebTestCase
{
    public function testCreatealbum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CreateAlbum');
    }

    public function testDeletealbum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DeleteAlbum');
    }

    public function testListalbum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListAlbum');
    }

}
