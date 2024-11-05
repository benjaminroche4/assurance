<?php

namespace App\Controller\public;

use App\Config\EmailConfig;
use App\Entity\Booking;
use App\Form\BookingType;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;

class BookingController extends AbstractController
{
    #[Route('/rappelez-moi', name: 'app_booking', options: ['sitemap' => ['priority' => 0.9]])]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, LoggerInterface $logger): Response
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $booking->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($booking);
            $entityManager->flush();

            $emailBooking = (new TemplatedEmail())
                ->from(new Address(EmailConfig::BOOKING_EMAIL))
                ->to(new Address(EmailConfig::CONTACT_EMAIL))
                ->subject('[Assurance Genevoise] Demande de rappelle')
                ->htmlTemplate('emails/booking.html.twig')
                ->context([
                    'createdAt' => new \DateTimeImmutable(),
                    'phoneNumber' => $booking->getPhoneNumber(),
                ]);

            try {
                $mailer->send($emailBooking);
            } catch (TransportExceptionInterface $e) {
                $logger->error('An error has been throw during the send :' . $e->getMessage());
            }

            $this->addFlash('success', 'Votre demande a été prise en compte. Un conseiller va vous recontacter rapidement.');
            return $this->redirectToRoute('app_booking');
        }

        return $this->render('public/booking/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
