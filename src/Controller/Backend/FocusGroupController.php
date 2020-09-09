<?php

namespace App\Controller\Backend;

use App\Entity\FocusAccess;
use App\Entity\FocusAccesss;
use App\Entity\FocusGroup;
use App\Entity\FocusMessage;
use App\Entity\Survey;
use App\Entity\User;
use App\Form\Backend\DeleteType;
use App\Form\Backend\FocusAccessType;
use App\Form\Backend\FocusGroupType;
use App\Form\Backend\FocusMessageType;
use App\Services\FocusAccessCheck;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/admin/focus_group", name="admin_focus_group_")
 */
class FocusGroupController extends AbstractController
{


    /**
     *
     * @Route("/{id}/show", name="show")
     */
    public function showAction(Request $request, Survey $survey)
    {
        $deleteForm = $this->createForm(DeleteType::class);
        $deleteForm->handleRequest($request);
        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $deleteData = $deleteForm->getData();

            $focusMessage = $this->getDoctrine()->getRepository('App:FocusMessage')->find($deleteData['id']);
            if ($focusMessage) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($focusMessage);
                $em->flush();

                $this->addFlash('success', 'Le message a bien été supprimé.');
            }
        }

        $focusGroup = $survey->getFocusGroup();
        if (!$focusGroup) {
            $focusGroup = new FocusGroup();
            $focusGroup->setSurvey($survey);
        }

        $focusGroupForm = $this->createForm(FocusGroupType::class, $focusGroup);

        $focusGroupForm->handleRequest($request);
        if ($focusGroupForm->isSubmitted() && $focusGroupForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($focusGroup);
            $em->flush();
        }

        $focusMessages = $this->getDoctrine()->getRepository('App:FocusMessage')->findBy(array(
            'parent' => null,
            'focusGroup' => $focusGroup
        ));



        return $this->render('/Backend/FocusGroup/show.html.twig', array(
            'focusMessages' => $focusMessages,
            'survey' => $survey,
            'focus_form' => $focusGroupForm->createView(),
            'delete_message_form' => $deleteForm->createView()
        ));
    }

    /**
     * @Route("/{id}/accesses", name="accesses")
     * @param Request $request
     * @param Survey $survey
     * @param FocusAccessCheck $focusAccessCheck
     * @return Response
     */
    public function accessesAction(Request $request, Survey $survey, FocusAccessCheck $focusAccessCheck)
    {
        //$focusAccessCheck = $this->get('focus_access_check');

        $checkAccesses = array();
        foreach ($survey->getPanelisteGroup()->getUsers() as $user) {
            $checkAccesses[$user->getId()] = $focusAccessCheck->checkUser($user, $survey);
        }

        $accessesOverrides = array();
        $focusAccessRepo = $this->getDoctrine()->getRepository('App:FocusAccesss');
        foreach ($survey->getPanelisteGroup()->getUsers() as $user) {
            $accessesOverrides[$user->getId()] = $focusAccessRepo->findOneBy(array(
                'focusGroup' => $survey->getFocusGroup(),
                'user' => $user
            ));
        }

        return $this->render('/Backend/FocusGroup/accesses.html.twig', array(
            'survey' => $survey,
            'checkAccesses' => $checkAccesses,
            'accessesOverrides' => $accessesOverrides
        ));
    }


    /**
     * Survey controller.
     *
     * @Route("/{survey}/accesses-edit/{user}", name="access_edit")
     */
    public function accessEditAction(Request $request, Survey $survey, User $user)
    {
        $accessCheck = $this->getDoctrine()->getRepository('App:FocusAccesss')->findOneBy(array(
            'user' => $user,
            'focusGroup' => $survey->getFocusGroup()
        ));

        if (!$accessCheck) {
            $accessCheck = new FocusAccess();
            $accessCheck->setFocusGroup($survey->getFocusGroup());
            $accessCheck->setUser($user);
            $accessCheck->setAccess(FocusAccess::ACCESS_BY_DEFAULT);
        }

        $focusAccessForm = $this->createForm(FocusAccessType::class, $accessCheck);

        $focusAccessForm->handleRequest($request);
        if ($focusAccessForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($accessCheck);
            $em->flush();

            $this->addFlash('success', 'Les accès du panéliste ont bien été enregistrés.');

            return $this->redirectToRoute('admin_focus_group_accesses', array(
                'id' => $survey->getId()
            ));
        }

        return $this->render('/Backend/FocusGroup/access_edit.html.twig', array(
            'survey' => $survey,
            'access_form' => $focusAccessForm->createView()
        ));
    }


    /**
     *
     * @Route("/edit-message/{id}", name="edit_message")
     */
    public function editMessageAction(Request $request, FocusMessage $focusMessage)
    {
        $editMessageForm = $this->createForm(FocusMessageType::class, $focusMessage);

        $editMessageForm->handleRequest($request);
        if ($editMessageForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($focusMessage);
            $em->flush();

            $this->addFlash('success', 'Le message a bien été modifié.');

            return $this->redirectToRoute('admin_focus_group_show', array(
                'id' => $focusMessage->getFocusGroup()->getSurvey()->getId()
            ));
        }

        return $this->render('/Backend/FocusGroup/edit_message.html.twig', array(
            'focusMessage' => $focusMessage,
            'edit_form' => $editMessageForm->createView()
        ));
    }

    /**
     *
     * @Route("/reply-message/{id}", name="reply_message")
     */
    public function replyMessageAction(Request $request, FocusMessage $focusMessage)
    {
        $newMessageForm = $this->createForm(FocusMessageType::class);

        $newMessageForm->handleRequest($request);
        if ($newMessageForm->isValid()) {
            /** @var FocusMessage $newFocusMessage */
            $newFocusMessage = $newMessageForm->getData();
            $newFocusMessage->setFocusGroup($focusMessage->getFocusGroup());
            $newFocusMessage->setParent($focusMessage);
            $newFocusMessage->setUser(null);

            $em = $this->getDoctrine()->getManager();
            $em->persist($newFocusMessage);
            $em->flush();

            $this->addFlash('success', 'La réponse a bien été enregistrée.');

            return $this->redirectToRoute('admin_focus_group_show', array(
                'id' => $focusMessage->getFocusGroup()->getSurvey()->getId()
            ));
        }

        return $this->render('/Backend/FocusGroup/reply_message.html.twig', array(
            'focusMessage' => $focusMessage,
            'reply_form' => $newMessageForm->createView()
        ));
    }

    /**
     *
     * @Route("/validate_message/{id}", name="validate_message")
     */
    public function validateMessageAction(Request $request, FocusMessage $focusMessage)
    {
        if ($focusMessage) {
            $focusMessage->setVisible(!$focusMessage->getVisible());

            if ($focusMessage->getVisible())
                $this->addFlash('success', 'Le message a bien été verifié.');
            else
                $this->addFlash('success', 'Le message a bien été caché.');

            $em = $this->getDoctrine()->getManager();
            $em->persist($focusMessage);
            $em->flush();
        }

        return $this->redirectToRoute('admin_focus_group_show', array(
            'id' => $focusMessage->getFocusGroup()->getSurvey()->getId()
        ));
    }

    /**
     *
     * @Route("/export_participants/{focusGroup}", name="export_participant")
     */
    public function exportParticipantsAction(FocusGroup $focusGroup) {

        $messages = $focusGroup->getFocusMessages();
        $participants = [];

        foreach ($messages as $message) {
            $participants[$message->getUser()->getId()] = $message->getUser();
        }

        $fileName = 'participant-' . $focusGroup->getId() . '-' . date('d-m-Y H\\hi');
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $phpExcelObject->getProperties()->setTitle($fileName);

        $i = 1;
        foreach ($participants as $participant) {

            /** @var User $participant */
            $phpExcelObject
                ->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $participant->getIdPaneliste())
                ->setCellValue('B'.$i, $participant->getFirstname())
                ->setCellValue('C'.$i, $participant->getLastname())
                ->setCellValue('D'.$i, $participant->getEmail())
                ->setCellValue('E'.$i, $participant->getPhone())

            ;
            $i++;
        }

        $phpExcelObject->getActiveSheet()->setTitle('Participants');
        $phpExcelObject->setActiveSheetIndex(0);
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT, $fileName.'.xls'
        );

        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }


    /**
     * @Route("/export-absents/{focusGroup}", name="export_absents")
     */
    public function exportAbsentsAction(FocusGroup $focusGroup) {

        $users = $focusGroup->getSurvey()->getPanelisteGroup()->getUsers();
        $messages = $focusGroup->getFocusMessages();
        $participants = [];

        foreach ($messages as $message) {
            $participants[$message->getUser()->getId()] = $message->getUser();
        }

        $filtered_users = [];

        /** @var User $participant */
        foreach ($users as $user) {
            if (!isset($participants[$user->getId()])) {
                $filtered_users[$user->getId()] = $user;
            }
        }

        $fileName = 'absent-' . $focusGroup->getId() . '-' . date('d-m-Y H\\hi');
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $phpExcelObject->getProperties()->setTitle($fileName);

        $i = 1;
        foreach ($filtered_users as $filtered_user) {

            /** @var User $participant */
            $phpExcelObject
                ->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $filtered_user->getIdPaneliste())
                ->setCellValue('B'.$i, $filtered_user->getFirstname())
                ->setCellValue('C'.$i, $filtered_user->getLastname())
                ->setCellValue('D'.$i, $filtered_user->getEmail())
                ->setCellValue('E'.$i, $filtered_user->getPhone())

            ;
            $i++;
        }

        $phpExcelObject->getActiveSheet()->setTitle('Absents');
        $phpExcelObject->setActiveSheetIndex(0);
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT, $fileName.'.xls'
        );

        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }
}
