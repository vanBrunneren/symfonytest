<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {

    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {

    }

}