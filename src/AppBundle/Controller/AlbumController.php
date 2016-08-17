<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Album;
use AppBundle\Entity\Gallery;
use Symfony\Component\HttpFoundation\Response;

class AlbumController extends Controller
{
    /**
     * @Route("/CreateAlbum")
     */
    public function CreateAlbumAction()
    {
        return $this->render('AppBundle:AlbumListController:create_album.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/DeleteAlbum")
     */
    public function DeleteAlbumAction()
    {
        return $this->render('AppBundle:AlbumListController:delete_album.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ListAlbum")
     */
    public function ListAlbumAction()
    {
        return $this->render('AppBundle:AlbumListController:list_album.html.twig', array(
            // ...
        ));
    }

}
