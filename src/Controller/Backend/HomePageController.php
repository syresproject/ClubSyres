<?php

namespace App\Controller\Backend;

use App\Entity\HomePage;
use App\Form\HomePageType;
use App\Repository\HomePageRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/home", name="admin_home_page_")
 */
class HomePageController extends AbstractController
{
    /**
     * @Route("/show", name="show", methods={"GET"})
     * @param HomePageRepository $newsletterRepository
     * @return Response
     */
    public function index(HomePageRepository $newsletterRepository): Response
    {
        return $this->render('Backend/home/show.html.twig', [
            'imagesAccueil' => $newsletterRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="new", methods={"GET","POST"})
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $homePage = new HomePage();
        $form = $this->createForm(HomePageType::class, $homePage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();



            $em->persist($homePage);
            $em->flush();

            //return $this->redirectToRoute('backend__news_shows', array('id' => $homePage->getId()));
        }


        return $this->render('Backend/imagesAccueil/new.edit.html.twig', [
            'homePage' => $homePage,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @param Request $request
     * @param $id
     * @return Response
     * @Route("/edit/{id}", name="admin_newsletter_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, $id): Response
    {

        $em = $this->getDoctrine()->getManager();

        $newsletter = $em->getRepository(HomePage::class)->find($id);
        //$newsletterOld = clone $imagesAccueil;
        $form = $this->createForm(HomePageType::class, $newsletter);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($newsletter);
            dump($form);

            /** @var UploadedFile $file * /
            $oldImg = $imagesAccueil->getImgSix();
            $oldImgUn = $imagesAccueil->getImgUn();
            $oldImgDeux = $imagesAccueil->getImgDeux();
            $oldImgTrois = $imagesAccueil->getImgTrois();
            $oldImgQuatre = $imagesAccueil->getImgQuatre();

            if ($oldImg !== null) {
                $fileName = $this->generateUniqueFileName($oldImg) . '.' . $oldImg->guessExtension();

                $oldImg->move(
                    'img_newsletter/',
                    $fileName
                );

                $imagesAccueil->setImgSix($fileName);
            } else {
                $imagesAccueil->setImgSix($newsletterOld->getImgSix());
            }

            if ($oldImgUn !== null) {
                $fileName = $this->generateUniqueFileName($oldImgUn) . '.' . $oldImgUn->guessExtension();

                $oldImgUn->move(
                    'img_newsletter/',
                    $fileName
                );

                $imagesAccueil->setImgUn($fileName);
            } else {
                $imagesAccueil->setImgUn($newsletterOld->getImgUn());
            }

            if ($oldImgDeux !== null) {
                $fileName = $this->generateUniqueFileName($oldImgDeux) . '.' . $oldImgDeux->guessExtension();

                $oldImgDeux->move(
                    'img_newsletter/',
                    $fileName
                );

                $imagesAccueil->setImgDeux($fileName);
            } else {
                $imagesAccueil->setImgDeux($newsletterOld->getImgDeux());
            }

            if ($oldImgTrois !== null) {
                $fileName = $this->generateUniqueFileName($oldImgTrois) . '.' . $oldImgTrois->guessExtension();

                $oldImgTrois->move(
                    'img_newsletter/',
                    $fileName
                );

                $imagesAccueil->setImgTrois($fileName);
            } else {
                $imagesAccueil->setImgTrois($newsletterOld->getImgTrois());
            }

            if ($oldImgQuatre !== null) {
                $fileName = $this->generateUniqueFileName($oldImgQuatre) . '.' . $oldImgQuatre->guessExtension();

                $oldImgQuatre->move(
                    'img_newsletter/',
                    $fileName
                );

                $imagesAccueil->setImgQuatre($fileName);
            } else {
                $imagesAccueil->setImgQuatre($newsletterOld->getImgQuatre());
            }
*/
            $em->persist($newsletter);
            $em->flush();

        }
        return $this->render('Backend/imagesAccueil/edit.html.twig', [
            'imagesAccueil' => $newsletter,
            'form' => $form->createView(),
        ]);


    }

}

