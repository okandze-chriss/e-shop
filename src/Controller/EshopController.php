<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EshopController extends AbstractController
{
    /**
     * @Route("/", name="eshop")
     */
    public function index(): Response
    {
        return $this->render('eshop/index.html.twig', [
            'controller_name' => 'EshopController',
        ]);
    }
    /**
     * @Route("/eshop", name="home")
     */
    public function home():Response
    {
        return  $this->render('eshop/home.html.twig');
    }
}
