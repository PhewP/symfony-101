<?php

    namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController {
    
    /**
     * @Route("/blog", name="blog_list", requirements={"page"="\d+"})
     */
     public function list(int $page = 1): Response{
         // ...
     }

     /**
      *  @Route("/blog/{slug}", name="blog_show")
      */

      public function show(string $slug): Response {

      }
}