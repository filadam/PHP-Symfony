<?php


namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('omg');
    }

    /**
    * @Route ("/home/{slug}")
    */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page: %s',
            $slug
        ));
    }

}