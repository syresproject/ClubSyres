<?php

namespace App\Controller\Frontend;


use App\Entity\StaticPage;
use App\Repository\NewsletterRepository;
use App\Services\SurveyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/paneliste", name="user_accueil_")
 */
class AccueilController extends AbstractController
{

    /**
     * @Route("/", name="index")
     * @param Request $request
     * @param NewsletterRepository $newsletterRepository
     * @param SurveyService $surveyService
     * @return Response
     */
    public function index(Request $request, NewsletterRepository $newsletterRepository, SurveyService $surveyService): Response
    {

        $surveysCount = $surveyService->getSurveyCount($this->getUser());
        //dump($surveysCount);

        //Recuperation du mention legale
        $legalNotice = $this->getDoctrine()->getRepository('App:StaticPage')->findOneBy(array(
            'alias'  => 'legal_notice'
        ));


       // dd($legalNotice);
        return $this->render('frontend/home/show.html.twig', [
            //les inscription
            'newsletter' => $newsletterRepository->findAll(),
            //Mention legale
            'legal_notice' => $legalNotice,
            'surveys_count' => $surveysCount,

        ]);
    }
}
