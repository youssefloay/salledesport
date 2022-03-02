<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    
        /**
         * @Route("/", name="home")
         */
        public function home()
        {
                return $this->render('navigation/home.html.twig');
        }

        /**
         * @Route("/membre", name="membre")
         */
        public function membre()
        {
                return $this->render('navigation/membre.html.twig');
        }

        /**
         * @Route("/admin", name="admin")
         */
        public function admin()
        {
                return $this->render('navigation/admin.html.twig');
        }

}
