<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_redirect')]
    public function redirectToHome(): RedirectResponse
    {
        return $this->redirectToRoute('app_home_page');
    }

    #[Route('/home', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomePageController',
            'quantiteMedusa' => 1,
            'priceMedusa' => 80,
            'quantitePistil' => 1,
            'pricePistil' => 140,
            'subtotal' => 220,
            'delivery' => 10,
            'total' => 230
        ]);
    }
}
