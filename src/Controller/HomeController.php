<?php

namespace App\Controller;

use App\Repository\ModuleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
final class HomeController extends AbstractController
{
    #[Route(name: 'app_home_index', methods: ['GET'])]
    public function index(ModuleRepository $repo): Response
    {
        return $this->render('module/index.html.twig', [
            'modules' => $repo->findAll()
        ]);
    } 
}    