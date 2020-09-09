<?php

namespace App\Controller\Backend;

use App\Entity\Link;
use App\Entity\LinkLog;
use App\Entity\Survey;
use App\Entity\User;
use App\Form\Backend\SyncRepliesType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("admin/link/", name="admin_link_")
 * Class LinkController
 * @package App\Controller\Backend
 */
class LinkController extends AbstractController
{
    /**
     * @Route("access-details/{link}", name="access_details")
     * @param Request $request
     * @param Link $link
     * @return Response
     */
    public function accessDetailsAction(Request $request, Link $link)
    {
        /** @var LinkLog[] | false $linkLogs */
        $linkLogs = $this->getDoctrine()->getRepository('App:LinkLog')->findBy(array(
            'link' => $link,
            'type' => LinkLog::ACCESS
        ));

        $history = array();
        foreach ($linkLogs as $linkLog) {
            $history[$linkLog->getUser()->getId()] = $linkLog->getUser();
        }

        $panelistes = $link->getSurvey()->getPanelisteGroup()->getUsers();

        return $this->render('/Backend/Link/access_details.html.twig', array(
            'link' => $link,
            'linkLogs' => $linkLogs,
            'panelistes' => $panelistes,
            'history' => $history
        ));
    }

    /**
     * @Route("replies-details/{link}", name="replies_details")
     * @param Request $request
     * @param Link $link
     * @return Response
     */
    public function repliesDetailsAction(Request $request, Link $link)
    {
        /** @var LinkLog[] | false $linkLogs */
        $linkLogs = $this->getDoctrine()->getRepository('App:LinkLog')->findBy(array(
            'link' => $link,
            'type' => LinkLog::REPLY
        ));

        $history = array();
        foreach ($linkLogs as $linkLog) {
            $history[$linkLog->getUser()->getId()] = $linkLog->getUser();
        }

        $panelistes = $link->getSurvey()->getPanelisteGroup() ? $link->getSurvey()->getPanelisteGroup()->getUsers() : new ArrayCollection();

        return $this->render('/Backend/Link/replies_details.html.twig', array(
            'link' => $link,
            'linkLogs' => $linkLogs,
            'panelistes' => $panelistes,
            'history' => $history
        ));
    }


    /**
     * @Route("sync-replies/{link}", name="sync_replies")
     * @param Request $request
     * @param Link $link
     * @return Response
     */
    public function syncRepliesAction(Request $request, Link $link)
    {
        $syncForm = $this->createForm(SyncRepliesType::class);

        $syncForm->handleRequest($request);
        if ($syncForm->isSubmitted() && $syncForm->isValid()) {
            /** @var UploadedFile $file */
            $file = $syncForm->get('file')->getData();

            $externalType = $syncForm->get('externalType')->getData();

            //IF IS GDOC

            if ($externalType == Survey::EXTERNAL_TYPE_FIELDS['G_DOC']) {
                $phpExcelService = $this->get('phpexcel');
                $phpExcelObject = $phpExcelService->createPHPExcelObject($file->getRealPath());
                $excelSheet = $phpExcelObject->getActiveSheet();

                $horodateur = array();

                $idPanelistes = array();
                $nbRow = $excelSheet->getHighestDataRow();
                for ($i = 2; $i <= $nbRow; $i++) {
                    $idPaneliste = $excelSheet->getCellByColumnAndRow(1, $i)->getValue();
                    $idPanelistes[] = $idPaneliste;

                    $cellValue = $excelSheet->getCellByColumnAndRow(0, $i)->getValue();
                    $horodateur[$idPaneliste] = \PHPExcel_Style_NumberFormat::toFormattedString($cellValue,'YYYY-MM-DD H:i:s');
                }

                $em = $this->getDoctrine()->getManager();
                $userRepository = $this->getDoctrine()->getRepository('App:User');

                $userRepository->deleteAllRepliesIds($link);
                $userPanelistes = $userRepository->getAllWithIds($idPanelistes);

                foreach ($userPanelistes as $userPaneliste) {
                    $linkLog = new LinkLog();
                    $linkLog->setUrl($link->getLink());
                    $linkLog->setLink($link);
                    $linkLog->setUser($userPaneliste);
                    $linkLog->setType(LinkLog::REPLY);

                    $newDt = \DateTime::createFromFormat("Y-m-d H:i:s", $horodateur[$userPaneliste->getIdPaneliste()]);
                    if ($newDt !== false) {
                        $linkLog->setHorodateur($newDt);
                    }

                    $em->persist($linkLog);
                }

                $em->flush();

                $this->addFlash('success', 'Import effectué avec succès');
            }
            //IF MODALISA
            elseif ($externalType == Survey::EXTERNAL_TYPE_FIELDS['MODALISA']) {

                $phpExcelService = $this->get('phpexcel');
                $phpExcelObject = $phpExcelService->createPHPExcelObject($file->getRealPath());
                $excelSheet = $phpExcelObject->getActiveSheet();

                $horodateur = array();

                $idPanelistes = array();
                $nbRow = $excelSheet->getHighestDataRow();
                for ($i = 2; $i <= $nbRow; $i++) {
                    $idPaneliste = $excelSheet->getCellByColumnAndRow(1, $i)->getValue();
                    $idPanelistes[] = $idPaneliste;

                    $horodateur[$idPaneliste] = \PHPExcel_Style_NumberFormat::toFormattedString($excelSheet->getCellByColumnAndRow(84, $i)->getValue(), 'Y-m-d') . ' ' . \PHPExcel_Style_NumberFormat::toFormattedString($excelSheet->getCellByColumnAndRow(85, $i)->getValue(), 'H:i:s');
                }
                $em = $this->getDoctrine()->getManager();
                $userRepository = $this->getDoctrine()->getRepository('App:User');

                $userRepository->deleteAllRepliesIds($link);
                $userPanelistes = $userRepository->getAllWithIds($idPanelistes);

                foreach ($userPanelistes as $userPaneliste) {
                    $linkLog = new LinkLog();
                    $linkLog->setUrl($link->getLink());
                    $linkLog->setLink($link);
                    $linkLog->setUser($userPaneliste);
                    $linkLog->setType(LinkLog::REPLY);

                    $newDt = \DateTime::createFromFormat("Y-m-d H:i:s", $horodateur[$userPaneliste->getIdPaneliste()]);
                    if ($newDt !== false) {
                        $linkLog->setHorodateur($newDt);
                    }

                    $em->persist($linkLog);
                }

                $em->flush();

                $this->addFlash('success', 'Import effectué avec succès');
            }
        }

        return $this->render('/Backend/Link/sync_replies.html.twig', array(
            'link' => $link,
            'form' => $syncForm->createView()
        ));
    }

    /**
     * @Route("export-missings/{link}", name="export-missings")
     * @param Request $request
     * @param Link $link
     * @return mixed
     */
    public function exportMissingsAction(Request $request, Link $link)
    {
        /** @var LinkLog[] | false $linkLogs */
        $linkLogs = $this->getDoctrine()->getRepository('App:LinkLog')->findBy(array(
            'link' => $link,
            'type' => LinkLog::REPLY
        ));

        $history = array();
        foreach ($linkLogs as $linkLog) {
            $history[$linkLog->getUser()->getId()] = $linkLog->getUser();
        }

        $panelistes = $link->getSurvey()->getPanelisteGroup() ? $link->getSurvey()->getPanelisteGroup()->getUsers() : new ArrayCollection();

        $fileName = $link->getSurvey()->getIdSurvey().' - '.$link->getSurvey()->getName().' - '.$link->getName().' - Absents '. date('d-m-Y H\\hi');
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $phpExcelObject->getProperties()->setTitle($fileName);

        $i = 1;
        foreach ($panelistes as $paneliste) {
            if (!isset($history[$paneliste->getId()])) {
                $phpExcelObject
                    ->setActiveSheetIndex(0)
                    ->setCellValue('A'.$i, $paneliste->getIdPaneliste())
                    ->setCellValue('B'.$i, $paneliste->getFirstname())
                    ->setCellValue('C'.$i, $paneliste->getLastname())
                    ->setCellValue('D'.$i, $paneliste->getEmail());

                $i++;
            }
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
