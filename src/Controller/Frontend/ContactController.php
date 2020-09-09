<?php

namespace App\Controller\Frontend;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/paneliste/contact", name="user_contact_")
 */
class ContactController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param MailerInterface $mailer
     * @param Request $request
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function index(MailerInterface $mailer, Request $request)
    {
        $contactForm = $this->createForm(ContactType::class, null, array(
            'method' => 'PUT'
        ));

        $data = new Contact();

        $contactForm->handleRequest($request);
        if ($contactForm->isSubmitted() && $contactForm->isValid()) {
            /** @var Contact $data */
           $data = $contactForm->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();


            $message = (new Email())
                ->from($data->getEmail())
                ->to('paula.dehora@syres.fr')
                ->subject('[Contact Club Syres ' . $data->getFirstname() . ' - ' . $data->getLastname() . '] ')

            ->html('<h2> ID Paneliste : '.$data->getIdPaneliste().'</h2><h4> Sujet : ' . $data->getSubject(). '</h4> Message : ' . $data->getContent());

            $mailer->send($message);

            $this->addFlash('success', 'Your message has been sent.');

            return $this->redirectToRoute('user_accueil_index');

        }

        elseif ($this->getUser() && $this->getUser()->getEmail()) {
            $contactForm->get('email')->setData($this->getUser()->getEmail());
            $contactForm->get('idPaneliste')->setData($this->getUser()->getId());
            $contactForm->get('firstname')->setData($this->getUser()->getFirstname());
            $contactForm->get('lastname')->setData($this->getUser()->getLastname());
        }

        return $this->render('frontend/Contact/index.html.twig', [
            'contact_form' => $contactForm->createView(),
        ]);
    }


}
