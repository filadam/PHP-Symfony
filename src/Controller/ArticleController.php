<?php


namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
    * @Route ("/home/{slug}", name="article_show")
    */
    public function show($slug)
    {
        $comments = [
            'I ate a pork',
            'Dupa dupa duPA',
            'lubie placki JHEaJSID',
        ];



        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-','', $slug)),
            'comments' => $comments,
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug)
    {
        // TODO - actually heart/unheart the article

        return new JsonResponse(['hearts' => rand(5,100)]);
    }

}