<?php

namespace App\Controller;

use App\Form\BookingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookingController extends AbstractController
{
    #[Route('/rappel', name: 'app_booking')]
    public function index(): Response
    {
        $form = $this->createForm(BookingType::class);

        return $this->render('booking/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
