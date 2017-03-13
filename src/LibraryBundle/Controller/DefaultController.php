<?php

namespace LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $json = file_get_contents('http://black_books.my/books');
        $json = json_decode($json);
        return $this->render('LibraryBundle:Default:index.html.twig',['livres' => $json]);

    }
}
