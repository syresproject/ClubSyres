<?php

namespace App\Controller\TestAvenir;

use App\Entity\Deo;
use App\Form\TestAvenir\DeoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/paneliste/test-avenir", name="user_test_a_venirs_deo_")
 */
class DeoController extends AbstractController
{
    /**
     * @Route("/deo", name="create")
     * @param Request $request
     * @param MailerInterface $mailer
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function create(Request $request, MailerInterface $mailer)
    {
        $ouiDeo = "Oui, de déodorant";
        $selNon = "Non";
        $pNon   = "Non";
        $dF     = "Bille/roll-on";

        $em = $this->getDoctrine()->getManager();
        $deo = new Deo();

        $form = $this->createForm(DeoType::class, $deo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em->persist($deo);
            $em->flush();
            $deo = $form->getData();

            if ($deo->getUtilisateurDeo()
                == $ouiDeo && $deo->getPierreAlun()
                == $pNon && $deo->getSelsAlu()
                == $selNon && $deo->getFormeDeo()
                == $dF)
            {
                $message = (new Email())
                    ->from('djikine91@outlook.fr')
                    ->to('djikine.d@outlook.fr')
                    ->subject('[Contact Club Syres ] ')
                    ->html("<h2> ID Paneliste : 123" .
                        "Utilisateur deo" . $deo->getUtilisateurDeo() .
                        "Pierre d'alun = " . $deo->getPierreAlun() .
                        "Sels_alu" . $deo->getSelsAlu() .
                        "Forme deo" . $deo->getFormeDeo()
                    );
                $mailer->send($message);
            }
        }
        return $this->render('frontend/test_a_venir/deo/deo.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
