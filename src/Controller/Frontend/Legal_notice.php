<?php


namespace App\Controller\Frontend;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/paneliste/mention-legale", name="user_mention_legale_")
 * @param Request $request
 * @return Response
 */
class Legal_notice extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {
        //Recuperation du mention legale
        $legalNotice = $this->getDoctrine()->getRepository('App:StaticPage')->findOneBy(array(
            'alias'  => 'legal_notice'
        ));

        // dd($legalNotice);
        return $this->render('frontend/StaticPage/legal_notice.html.twig', [
            //Mention legale
            'legal_notice' => $legalNotice
        ]);
    }

}