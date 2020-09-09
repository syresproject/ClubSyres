<?php

namespace App\Controller\Frontend;

use App\Entity\Survey;
use App\Entity\User;
use App\Services\FocusAccessCheck;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/paneliste", name="user_survey_")
 */
class SurveyController extends AbstractController
{

    /**
     *
     * @Route("/enquete", name="enquete")
     */
    public function enqueteAction()
    {
        $surveysListByCategory = $this->getSurveyListByCategory(Survey::ENQUETE);

        return $this->render('frontend/Survey/enquete.html.twig', array(
            'surveysListByCategory' => $surveysListByCategory
        ));
    }

    public function preRecrutementAction()
    {
        $surveysListByCategory = $this->getSurveyListByCategory(Survey::PRE_RECRUTEMENT);

        return $this->render('frontend/Survey/pre_recrutement.html.twig', array(
            'surveysListByCategory' => $surveysListByCategory
        ));
    }

    /**
     *
     * @Route("/tests", name="tests")
     */
    public function testAction()
    {
        $surveysListByCategory = $this->getSurveyListByCategory(Survey::TEST);


        return $this->render('frontend/Survey/test.html.twig', array(
            'surveysListByCategory' => $surveysListByCategory
        ));
    }

    /**
     * @Route("/closed_tests", name="closed_tests")
     */
    public function closedTestAction()
    {
        $closedSurveysListByCategory = $this->getClosedSurveyListByCategory(Survey::TEST);


        return $this->render('frontend/Survey/closed_test.html.twig', array(
            'closedSurveysListByCategory' => $closedSurveysListByCategory
        ));
    }

    /**
     *
     * @Route("/details/{id}", name="details")
     */
    public function detailsAction(Survey $survey, FocusAccessCheck $focusAccessCheck)
    {
        $history = array();
        foreach ($survey->getLinks() as $link) {
            $linkLogs = $this->getDoctrine()->getRepository('App:LinkLog')->findBy(array(
                'user' => $this->getUser(),
                'link' => $link
            ));

            if ($linkLogs) {
                $history[$link->getId()] = $linkLogs;
            }
        }

        if ($survey->getType() == Survey::TEST) {
            //$focusAccessCheck = $this->get('focus_access_check');
            $focusAccess = $focusAccessCheck->checkUserWithOverride($this->getUser(), $survey);
        } else {
            $focusAccess = false;
        }

        $userP = $this->getUser()->getIdPaneliste();

        return $this->render('frontend/Survey/details.html.twig', array(
            'focusAccess'   => $focusAccess,
            'survey'        => $survey,
            'history'       => $history,
            'userP'=>$userP
        ));
    }

    private function getSurveyListByCategory($type)
    {
        /** @var User $user */
        $user = $this->getUser();
        //dump($user);
        $surveysListByCategory = array();
        $panelisteGroups = $user->getPanelisteGroups();
        foreach ($panelisteGroups as $panelisteGroup) {
            $tmpSurveys = $panelisteGroup->getSurveys();
            foreach ($tmpSurveys as $tmpSurvey) {
                if ($tmpSurvey->isVisible() && $tmpSurvey->getType() == $type && $tmpSurvey->getStatus() !== Survey::CLOTURE) {
                    if (!isset($surveysListByCategory[$tmpSurvey->getCategory()->getId()])) {
                        $surveysListByCategory[$tmpSurvey->getCategory()->getId()] = array(
                            'details' => $tmpSurvey->getCategory(),
                            'surveys' => array(
                                Survey::EN_COURS    => array(),
                                Survey::FOCUS_GROUP => array(),
                                Survey::A_VENIR     => array(),
                                Survey::CLOTURE     => array()
                            )
                        );
                    }

                    $surveysListByCategory[$tmpSurvey->getCategory()->getId()]['surveys'][$tmpSurvey->getStatus()][] = $tmpSurvey;
                }
            }
        }

        return $surveysListByCategory;
    }

    private function getClosedSurveyListByCategory($type)
    {
        /** @var User $user */
        $user = $this->getUser();

        $surveysListByCategory = array();

        $panelisteGroups = $user->getPanelisteGroups();
        foreach ($panelisteGroups as $panelisteGroup) {
            $tmpSurveys = $panelisteGroup->getSurveys();
            foreach ($tmpSurveys as $tmpSurvey) {
                if ($tmpSurvey->isVisible() && $tmpSurvey->getType() == $type && $tmpSurvey->getStatus() === Survey::CLOTURE) {
                    if (!isset($surveysListByCategory[$tmpSurvey->getCategory()->getId()])) {
                        $surveysListByCategory[$tmpSurvey->getCategory()->getId()] = array(
                            'details' => $tmpSurvey->getCategory(),
                            'surveys' => array(
                                Survey::EN_COURS    => array(),
                                Survey::FOCUS_GROUP => array(),
                                Survey::A_VENIR     => array(),
                                Survey::CLOTURE     => array()
                            )
                        );
                    }

                    $surveysListByCategory[$tmpSurvey->getCategory()->getId()]['surveys'][$tmpSurvey->getStatus()][] = $tmpSurvey;
                }
            }
        }

        return $surveysListByCategory;
    }
}
