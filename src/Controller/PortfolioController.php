<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioController extends AbstractController{
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/passion', name: 'app_passion')]
    public function passion(): Response
    {
        return $this->render('portfolio/passion.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('portfolio/cv.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/formulaire', name: 'app_formulaire')]
    public function formulaire(): Response
    {
        return $this->render('portfolio/formulaire.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
