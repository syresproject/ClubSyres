<?php

namespace App\Controller\Backend;

use App\Entity\ClubArticle;
use App\Entity\Configuration;
use App\Entity\StaticPage;
use App\Entity\User;
use App\Repository\ConfigurationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use App\Form\Backend\ConfigurationType;
use App\Form\Backend\LegalNoticeType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Configuration controller.
 *
 * @Route("admin/configuration", name="admin_configuration_")
 */

class ConfigurationController extends AbstractController
{

    /**
     * @Route("/", name="index", methods={"GET"})
     * @param ConfigurationRepository $configurationRepository
     * @return Response
     */
    public function index(ConfigurationRepository $configurationRepository): Response
    {
        return $this->render('Backend/Configuration/SocialMedia/index.html.twig', [
            'configurations' => $configurationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $configuration = new Configuration();
        $form = $this->createForm(ConfigurationType::class, $configuration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($configuration);
            $entityManager->flush();

            //return $this->redirectToRoute('configuration_index');
        }

        return $this->render('Backend/Configuration/SocialMedia/new.html.twig', [
            'configuration' => $configuration,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="configuration_show", methods={"GET"})
     */
    public function show(Configuration $configuration): Response
    {
        return $this->render('Backend/Configuration/SocialMedia/show.html.twig', [
            'configuration' => $configuration,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Configuration $configuration): Response
    {
        $form = $this->createForm(ConfigurationType::class, $configuration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_configuration_index');
        }

        return $this->render('Backend/Configuration/SocialMedia/edit.html.twig', [
            'configuration' => $configuration,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"DELETE"})
     */
    public function delete(Request $request, Configuration $configuration): Response
    {
        if ($this->isCsrfTokenValid('delete'.$configuration->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($configuration);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_configuration_index');
    }



    /*
     * Edits configuration data form.
     *
     * @Route("/", name="index")
     * /
    public function indexAction(Request $request)
    {
        $configurationData = $this->getDoctrine()->getRepository('App:Configuration')->findAll();
        $configurationForm = $this->createForm(ConfigurationType::class, null, array(
            'method'            => 'PUT',
            'configurationData' => $configurationData
        ));

        $configurationForm->handleRequest($request);
        if ($configurationForm->isSubmitted() && $configurationForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $data = $configurationForm->getData();

            $defaultConfiguration = $this->getDoctrine()->getRepository('App:Configuration')->findAll();

            foreach ($defaultConfiguration as $configuration) {
                if (isset($data[strtolower($configuration->getName())]) || $data[strtolower($configuration->getName())] === null) {
                    $configuration->setValue($data[strtolower($configuration->getName())]);
                    $em->persist($configuration);
                }
            }

            $em->flush();
            $this->addFlash('success', 'Les modifications ont bien été prises en compte.');
        }

        return $this->render('Backend/Configuration/index.html.twig', array(
            'configuration_form' => $configurationForm->createView(),
        ));
    }
    */

    

    /**
     * Legal notice edition.
     *
     * @Route("/mentions-legales", name="mentions_legales")
     * @param Request $request
     * @return Response
     */
    public function legalNoticeAction(Request $request)
    {
        $legalNotice = $this->getDoctrine()->getRepository('App:StaticPage')->findOneBy(array(
            'alias'  => 'legal_notice'
        ));

        $legalNoticeForm = $this->createForm(LegalNoticeType::class, $legalNotice, array(
            'method'            => 'PUT'
        ));

        $legalNoticeForm->handleRequest($request);
        if ($legalNoticeForm->isSubmitted() && $legalNoticeForm->isValid()) {

            /** @var StaticPage $data */
            $data = $legalNoticeForm->getData();
            if (!$data->getAlias()) {
                $data->setAlias('legal_notice');
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();

            $this->addFlash('success', 'Les modifications ont bien été prises en compte.');
        }

        return $this->render('Backend/Configuration/legal_notice.html.twig', array(
            'legal_notice_form' => $legalNoticeForm->createView()
        ));
    }


}
