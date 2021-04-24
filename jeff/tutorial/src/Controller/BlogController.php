<?php

    namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends AbstractController {
    
    /**
     * @Route("/blog", name="blog_list", requirements={"page"="\d+"}, priority=2)
     */
     public function list(int $page = 1): Response{
         // gnerate a URL with no route arguments
         $signUpRape = $this->generateUrl('sign_up');

         // generate a URL with route arguments
         $userProfilePage = $this->generateUrl('user_profile', ['username' => $user->getUsername(),
         ]);

         // generated URLs are "aboslute paths" by defaults. Pass athrid optional 
         // argument to generate different URLs (e.g an "absolute URL")

         $signUpPage = $this->generateUrl("sign_up", [], UrlGeneratorInterface::ABSOLUTE_URL);

         // when a route is localized, Symfony uses by dfeault the current request locale
         // pass a different '_Locale' value if you want ot set the Locale explicitly

         $signUpPageInDutch = $this->generateUrl('sign_up', ['_locale' => 'nl']);
     }

     /**
      *  @Route("/blog/{slug}", name="blog_show")
      */

      public function show(string $slug): Response {

      }
}