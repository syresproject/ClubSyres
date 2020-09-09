<?php


namespace App\Controller\Frontend;


use App\Entity\Inscription;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class InscriptionController extends  AbstractController
{


    /**
     * @Route("/inscription/confirme", name="inscription_confirme")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $pre_inscriptions = $em->getRepository(Inscription::class)->findAll();
//dump($pre_inscriptions);
        return $this->render('frontend/Inscription/confirme_inscription.html.twig', array (
            'pre_inscriptions' => $pre_inscriptions
        ));

    }


    /**
     * @Route("/inscription", name="inscription_new")
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws \Exception
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $inscription = new Inscription();

        //($inscription);
        $form = $this->createForm(InscriptionType::class, $inscription);
        // je l'attrape dans la requete
        $form->handleRequest($request);

        // je verifie si le formulaire à été soumis et s'il est valide
        if ($form->isSubmitted() && $form->isValid()) {
            //$Inscription->setDate(new \DateTime());
            $em->persist($inscription);
            $em->flush();
            $this->addFlash('success', 'Merci! Votre formulaire d\'inscription a bien été transmis');

            return $this->redirectToRoute('inscription_confirme');
            //return $this->redirectToRoute('inscription_show');
            //var_dump($Inscription);

            //dump(new \DateTime());
            // $test->setUser($this->getUser());

        }



        return $this->render('frontend/Inscription/create.html.twig', array(
            'formInscription' =>$form->createView(),
        ));
    }

}
