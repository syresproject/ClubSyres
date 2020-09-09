<?php

namespace App\Controller\Frontend;

use App\Entity\Survey;
use App\Entity\User;
use App\Repository\HomePageRepository;
use App\Services\FocusAccessCheck;
use App\Services\SurveyService;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class PdfController extends AbstractController
{
    /**
     * Lists all Survey entities.
     * @Route("/{id}/pdf", name="pdf")
     * @param Survey $survey
     * @param HomePageRepository $homePageRepository
     * @param FocusAccessCheck $focusAccessCheck
     */

    public function index(Survey $survey, FocusAccessCheck $focusAccessCheck)
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




        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('frontend/mypdf/mypdf.html.twig', [
            'title' => "Welcome to our PDF Test",
            'focusAccess'   => $focusAccess,
            'survey'        => $survey,
            'history'       => $history,

            //'home_pages' => $homePageRepository->findAll(),
            //'surveysListByCategory' => $surveysListByCategory,
            //'surveysListByCategoryTest' => $surveysListByCategoryTest
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
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