<?php

namespace App\Controller\Backend;

use App\Services\SurveyService;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Survey;
use App\Form\SurveyType;


/**
 * Survey controller.
 * @Route("/admin/survey", name="admin_survey_")
 */
class SurveyController extends AbstractController
{
    /**
     * Lists all Survey entities.
     * @Route("/tests/", name="tests_index", defaults={"surveyType": 2})
     * @Route("/enquetes/", name="enquetes_index", defaults={"surveyType": 0})
     * @Route("/pre_recrutements/", name="pre_recrutements_index", defaults={"surveyType": 1})
     * @param $surveyType
     * @return Response
     */
    public function indexAction($surveyType)
    {
        $em = $this->getDoctrine()->getManager();


        $surveys = $em->getRepository('App:Survey')->findBy(array(
            'type' => $surveyType
        ));

        return $this->render('/Backend/Survey/index.html.twig', array(
            'surveys'       => $surveys,
            'surveyType'    => $surveyType
        ));
    }

     /** les phpdoc avec ALT + entrer sur la fonction _?
     * @Route("/tests/new",  name="new_test", defaults={"surveyType": 2})
     * @Route("/enquetes/new", name="new_enquete", defaults={"surveyType": 0})
     * @Route("/pre_recrutements/new", name="new_prerecrutement", defaults={"surveyType": 1})
     * @param Request $request
     * @param $surveyType
     * @return RedirectResponse|Response
     *
     */
    public function newAction(Request $request, $surveyType)
    {
        $survey = new Survey();
        $form = $this->createForm(SurveyType::class, $survey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($survey);
            $em->flush();
            $this->addFlash('success', 'L\'élément a bien été crée.');
            return $this->redirectToRoute('admin_survey_show', array('id' => $survey->getId()));
        }

        return $this->render('/Backend/Survey/new.html.twig', array(
            'survey'        => $survey,
            'form'          => $form->createView(),
            'surveyType'    => $surveyType
        ));
    }



    public function generateUniqueFileName(UploadedFile $file)
    {
        $slugify = new Slugify();
        return date('m-d-Y_his') . '-' . $slugify->slugify($file->getClientOriginalName());
    }


    /**
     * Finds and displays a Survey entity.
     *
     * @Route("/{id}/show", name="show")
     * @param Survey $survey
     * @return Response
     */
    public function showAction(Survey $survey)
    {
        $deleteForm = $this->createDeleteForm($survey);

        return $this->render('/Backend/Survey/show.html.twig', array(
            'survey' => $survey,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Survey entity.
     * @Route("/enquetes/{id}/edit", name="enquete_edit", defaults={"surveyType": 0})
     * @Route("/pre_recrutements/{id}/edit", name="pre_recrutements_edit", defaults={"surveyType": 1})
     * @Route("/test/{id}/edit", name="test_edit", defaults={"surveyType": 2})
     * @param Request $request
     * @param Survey $survey
     * @param $surveyType
     * @return RedirectResponse|Response
     */
    public function editAction(Request $request, Survey $survey, $surveyType)
    {
        $deleteForm = $this->createDeleteForm($survey);
        $editForm = $this->createForm(SurveyType::class, $survey);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($survey);
            $em->flush();

            $this->addFlash('success', 'Les modifications ont bien été prises en compte.');

            if ($survey->getType() == Survey::ENQUETE) {
                return $this->redirectToRoute('admin_survey_enquetes_index');
            } elseif ($survey->getType() == Survey::PRE_RECRUTEMENT) {
                return $this->redirectToRoute('admin_survey_pre_recrutements_index');
            } elseif ($survey->getType() == Survey::TEST) {
                return $this->redirectToRoute('admin_survey_tests_index');
            } else {
                $this->addFlash('error', 'Erreur de rediction, type d\'enquête incorrect.');
                return $this->redirectToRoute('admin_home_index');
            }
        }

        return $this->render('/Backend/Survey/edit.html.twig', array(
            'survey'        => $survey,
            'edit_form'     => $editForm->createView(),
            'delete_form'   => $deleteForm->createView(),
            'surveyType'    => $surveyType
        ));
    }

    /**
     * Deletes a Survey entity.
     *
     * @Route("/{id}/delete", name="delete")
     * @param Request $request
     * @param Survey $survey
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, Survey $survey)
    {
        $form = $this->createDeleteForm($survey);
        $form->handleRequest($request);

        $surveyType = $survey->getType();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($survey);
            $em->flush();

            $this->addFlash('success', 'L\'élément a bien été supprimé.');
        }

        if ($surveyType == Survey::ENQUETE) {
            return $this->redirectToRoute('admin_survey_enquete_index');
        } elseif ($surveyType == Survey::PRE_RECRUTEMENT) {
            return $this->redirectToRoute('admin_survey_pre-recrutement_index');
        } elseif ($surveyType == Survey::TEST) {
            return $this->redirectToRoute('admin_survey_test_index');
        }

        $this->addFlash('error', 'Erreur de rediction lors de la suppression.');
        return $this->redirectToRoute('admin_home_index');
    }

    /**
     * Creates a form to delete a Survey entity.
     *
     * @param Survey $survey The Survey entity
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Survey $survey)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_survey_delete', array('id' => $survey->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
