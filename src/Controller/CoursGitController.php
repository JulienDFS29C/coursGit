<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursGitController extends AbstractController
{
    #[Route('/cours/git', name: 'app_cours_git')]
    public function index(): Response
    {
        return $this->render('cours_git/index.html.twig', [
            'controller_name' => 'CoursGitController',
        ]);
    }
}
