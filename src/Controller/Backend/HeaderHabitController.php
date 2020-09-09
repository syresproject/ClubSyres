<?php

namespace App\Controller\Backend;

use App\Entity\CategoryHabit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\HeaderHabit;
use App\Entity\Habit;
use App\Form\Backend\HeaderHabitType;

/**
 * HeaderHabit controller.
 *
 */
class HeaderHabitController extends AbstractController
{
    /**
     * Lists all HeaderHabit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $headerHabits = $em->getRepository('App:HeaderHabit')->findAll();

        return $this->render('/Backend/HeaderHabit/index.html.twig', array(
            'headerHabits' => $headerHabits,
        ));
    }

    /**
     * Creates a new Brand entity.
     *
     */
    public function importAction(Request $request)
    {
        $handle = fopen(__DIR__."/headerHabitsData.csv", "r");
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('App:CategoryHabit')->findOneBy(array("name" => "Cosmétiques"));

        if ($category === null) {
            $category = new CategoryHabit();
            $category->setName("Cosmétiques");
            $category->setIdSyres(1);
            $category->setVisible(true);
            $em->persist($category);
            $em->flush();
        }
        while (($fileLine = fgets($handle)) !== false) {
            $datas = explode(";", $fileLine);

            $idSyresHeader = $datas[0];
            $idSyresHabit = $datas[3];
            $nameHeader = $datas[1];
            $nameHabit = $datas[2];

            $header = $em->getRepository('App:HeaderHabit')->findOneBy(array("name" => $nameHeader));
            if ($header === null) {
                $header = new HeaderHabit();
            }

            $header->setName($nameHeader);
            $header->setIdSyres($idSyresHeader);
            $header->setVisible(true);
            $header->setCategoryHabit($category);
            $em->persist($header);
            $em->flush();

            $habit = $em->getRepository('App:Habit')->findOneBy(array("name" => $nameHabit));
            if ($habit === null) {
                $habit = new Habit();
            }

            $habit->setHeaderHabit($header);
            $habit->setName($nameHabit);
            $habit->setIdSyres($idSyresHabit);
            $habit->setVisible(true);
            $em->persist($habit);
            $em->flush();
        }
    }


    /**
     * Creates a new HeaderHabit entity.
     *
     */
    public function newAction(Request $request)
    {
        $headerHabit = new HeaderHabit();
        $form = $this->createForm('App\Form\Backend\HeaderHabitType', $headerHabit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($headerHabit);
            $em->flush();

            $this->addFlash('success', 'L\'élément a bien été crée.');

            return $this->redirectToRoute('backend_headerhabit_show', array('id' => $headerHabit->getId()));
        }

        return $this->render('/Backend/HeaderHabit/new.html.twig', array(
            'headerHabit' => $headerHabit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a HeaderHabit entity.
     *
     */
    public function showAction(HeaderHabit $headerHabit)
    {
        $deleteForm = $this->createDeleteForm($headerHabit);

        return $this->render('/Backend/HeaderHabit/mypdf.html.twig', array(
            'headerHabit' => $headerHabit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing HeaderHabit entity.
     *
     */
    public function editAction(Request $request, HeaderHabit $headerHabit)
    {
        $deleteForm = $this->createDeleteForm($headerHabit);
        $editForm = $this->createForm('App\Form\Backend\HeaderHabitType', $headerHabit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($headerHabit);
            $em->flush();

            $this->addFlash('success', 'Les modifications ont bien été prises en compte.');

            return $this->redirectToRoute('backend_headerhabit_edit', array('id' => $headerHabit->getId()));
        }

        return $this->render('/Backend/HeaderHabit/edit.html.twig', array(
            'headerHabit' => $headerHabit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a HeaderHabit entity.
     *
     */
    public function deleteAction(Request $request, HeaderHabit $headerHabit)
    {
        $form = $this->createDeleteForm($headerHabit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($headerHabit);
            $em->flush();

            $this->addFlash('success', 'L\'élément a bien été supprimé.');
        }

        return $this->redirectToRoute('backend_headerhabit_index');
    }

    /**
     * Creates a form to delete a HeaderHabit entity.
     *
     * @param HeaderHabit $headerHabit The HeaderHabit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HeaderHabit $headerHabit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backend_headerhabit_delete', array('id' => $headerHabit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
