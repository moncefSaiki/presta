<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     *@Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function site()
    {
        return $this->render('sitemap.html.twig', [
        ]);
    }
}
