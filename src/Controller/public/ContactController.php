<?php

namespace App\Controller\public;

use App\Config\EmailConfig;
use App\Entity\Contact;
use App\Form\ContactType;
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

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact', options: ['sitemap' => ['priority' => 0.9]])]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, LoggerInterface $logger): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $contact->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($contact);
            $entityManager->flush();

            $emailContact = (new TemplatedEmail())
                ->from($contact->getEmail())
                ->to(new Address(EmailConfig::CONTACT_EMAIL))
                ->subject('[Assurance Genevoise] Nouvelle demande de contact')
                ->htmlTemplate('emails/contact.html.twig')
                ->context([
                    'createdAt' => new \DateTimeImmutable(),
                    'contactType' => $contact->getContactType(),
                    'fullName' => $contact->getFullName(),
                    'company' => $contact->getCompany(),
                    'emailContact' => $contact->getEmail(),
                    'phoneNumber' => $contact->getPhoneNumber(),
                    'subject' => $contact->getSubject(),
                    'message' => $contact->getMessage(),
                ]);

            try {
                $mailer->send($emailContact);
            } catch (TransportExceptionInterface $e) {
                $logger->error('An error has been throw during the send :'. $e->getMessage());
            }

            $this->addFlash('success', 'Votre message a bien été envoyé. Un conseiller vous répondra dans les plus brefs délais.');
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('public/contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
