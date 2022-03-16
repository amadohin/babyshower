<?php

namespace App\Controller;

use App\Entity\Guests;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class HomePageController extends AbstractController
{
    #[Route('/{id}', name: 'app_home_page')]
    public function index(ManagerRegistry $doctrine, int $id): Response
    {
        $guest = $doctrine->getRepository(Guests::class)->find($id);

        return $this->render('home_page/index.html.twig', [
            'guest' => $guest,
        ]);
    }
}
