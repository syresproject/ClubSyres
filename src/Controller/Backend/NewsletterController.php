<?php

namespace App\Controller\Backend;

use App\Entity\Newsletter;
use App\Form\Backend\NewsletterType;
use App\Repository\NewsletterRepository;
use Cocur\Slugify\Slugify;
use Symfony\Component\String\Slugger\SluggerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/newsletter")
 */
class NewsletterController extends AbstractController
{
    /**
     * @Route("/show", name="admin_newsletter_show", methods={"GET"})
     * @param NewsletterRepository $newsletterRepository
     * @return Response
     */
    public function index(NewsletterRepository $newsletterRepository): Response
    {
        return $this->render('Backend/newsletter/show.html.twig', [
            'newsletter' => $newsletterRepository->findAll(),
        ]);
        

    }


    /**
     * @Route("/new", name="admin_newsletter", methods={"GET","POST"})
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $newsletter = new Newsletter();
        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($newsletter);
            $em->flush();

            //return $this->redirectToRoute('backend__news_shows', array('id' => $newsletter->getId()));
        }

        return $this->render('Backend/newsletter/new.edit.html.twig', [
            'newsletter' => $newsletter,
            'form' => $form->createView(),
        ]);
    }

    /*
     * @param UploadedFile $file
     *
     * @return Slugify
     * /
    private function generateUniqueFileName(UploadedFile $file)
    {
        $slugify = new Slugify();
        return date('m-d-Y_his') . '-' . $slugify->slugify($file->getClientOriginalName());
    }
    */

    /**
     * @param Request $request
     * @param $id
     * @return Response
     * @Route("/edit/{id}", name="admin_newsletter_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, $id): Response
    {

        $em = $this->getDoctrine()->getManager();

        $newsletter = $em->getRepository(Newsletter::class)->find($id);
        $newsletterOld = clone $newsletter;
        $form = $this->createForm(NewsletterType::class, $newsletter);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */

            /*
            $oldImg = $newsletter->getImgSix();
            $oldImgUn = $newsletter->getImgUn();
            $oldImgDeux = $newsletter->getImgDeux();
            $oldImgTrois = $newsletter->getImgTrois();
            $oldImgQuatre = $newsletter->getImgQuatre();

            if ($oldImg !== null) {
                $fileName = $this->generateUniqueFileName($oldImg) . '.' . $oldImg->guessExtension();

                $oldImg->move(
                    'img_newsletter/',
                    $fileName
                );

                $newsletter->setImgSix($fileName);
            } else {
                $newsletter->setImgSix($newsletterOld->getImgSix());
            }

            if ($oldImgUn !== null) {
                $fileName = $this->generateUniqueFileName($oldImgUn) . '.' . $oldImgUn->guessExtension();

                $oldImgUn->move(
                    'img_newsletter/',
                    $fileName
                );

                $newsletter->setImgUn($fileName);
            } else {
                $newsletter->setImgUn($newsletterOld->getImgUn());
            }

            if ($oldImgDeux !== null) {
                $fileName = $this->generateUniqueFileName($oldImgDeux) . '.' . $oldImgDeux->guessExtension();

                $oldImgDeux->move(
                    'img_newsletter/',
                    $fileName
                );

                $newsletter->setImgDeux($fileName);
            } else {
                $newsletter->setImgDeux($newsletterOld->getImgDeux());
            }

            if ($oldImgTrois !== null) {
                $fileName = $this->generateUniqueFileName($oldImgTrois) . '.' . $oldImgTrois->guessExtension();

                $oldImgTrois->move(
                    'img_newsletter/',
                    $fileName
                );

                $newsletter->setImgTrois($fileName);
            } else {
                $newsletter->setImgTrois($newsletterOld->getImgTrois());
            }

            if ($oldImgQuatre !== null) {
                $fileName = $this->generateUniqueFileName($oldImgQuatre) . '.' . $oldImgQuatre->guessExtension();

                $oldImgQuatre->move(
                    'img_newsletter/',
                    $fileName
                );

                $newsletter->setImgQuatre($fileName);
            } else {
                $newsletter->setImgQuatre($newsletterOld->getImgQuatre());
            }
            */

            $em->persist($newsletter);
            $em->flush();

        }
        return $this->render('Backend/newsletter/edit.html.twig', [
            'newsletter' => $newsletter,
            'form' => $form->createView(),
        ]);


    }

}

