<?php

namespace App\Controller\public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookingController extends AbstractController
{
    #[Route('/rappelez-moi', name: 'app_booking')]
    public function index(): Response
    {
        return $this->render('public/booking/index.html.twig');
    }
}
