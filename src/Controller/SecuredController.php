<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecuredController extends AbstractController
{
    #[Route('/secured', name: 'app.secured')]
    public function index(): Response
    {
        return $this->render('secured/index.html.twig', [
            'user' => $this->getUser()
        ]);
    }
}
