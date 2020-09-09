<?php

namespace App\Controller\Backend;

use App\Entity\HeaderHabit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\CategoryHabit;
use App\Form\Backend\CategoryHabitType;

/**
 * CategoryHabit controller.
 *
 * @Route("/admin/categoryhabit", name="backend_categoryhabit_")
 */

class CategoryHabitController extends AbstractController
{
    /**
     * Lists all CategoryHabit entities.
     *
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categoryHabits = array();

        $categoryHabitsResults = $em->getRepository('App\Entity\CategoryHabit')->findAll();

        foreach ($categoryHabitsResults as $categoryHabit) {
            $count = count($this->getDoctrine()->getRepository(HeaderHabit::class)->findBy(array(
                'categoryHabit' => $categoryHabit
            )));

            array_push($categoryHabits, array('value' => $categoryHabit, 'headerhabit_count' => $count));
        }

        return $this->render('/Backend/CategoryHabit/index.html.twig', array(
            'categoryHabits' => $categoryHabits,
        ));
    }

    /**
     * Creates a new CategoryHabit entity.
     *
     * @Route("/new", name="new")
     */
    public function newAction(Request $request)
    {
        $categoryHabit = new CategoryHabit();
        $form = $this->createForm(CategoryHabitType::class, $categoryHabit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryHabit);
            $em->flush();

            $this->addFlash('success', 'L\'élément a bien été crée.');

            return $this->redirectToRoute('backend_categoryhabit_show', array('id' => $categoryHabit->getId()));
        }

        return $this->render('/Backend/CategoryHabit/new.html.twig', array(
            'categoryHabit' => $categoryHabit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CategoryHabit entity.
     *
     * @Route("/{id}/show", name="show")
     */
    public function showAction(CategoryHabit $categoryHabit)
    {
        $deleteForm = $this->createDeleteForm($categoryHabit);

        $headerHabits = $this->getDoctrine()->getRepository(HeaderHabit::class)->findBy(array(
            'categoryHabit' => $categoryHabit
        ));

        return $this->render('/Backend/CategoryHabit/show.html.twig', array(
            'categoryHabit' => $categoryHabit,
            'delete_form' => $deleteForm->createView(),
            'headerHabits' => $headerHabits
        ));
    }

    /**
     * Displays a form to edit an existing CategoryHabit entity.
     *
     * @Route("/{id}/edit", name="edit")
     */
    public function editAction(Request $request, CategoryHabit $categoryHabit)
    {
        $deleteForm = $this->createDeleteForm($categoryHabit);
        $editForm = $this->createForm('App\Form\Backend\CategoryHabitType', $categoryHabit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryHabit);
            $em->flush();

            $this->addFlash('success', 'Les modifications ont bien été prises en compte.');

            return $this->redirectToRoute('backend_categoryhabit_edit', array('id' => $categoryHabit->getId()));
        }

        return $this->render('/Backend/CategoryHabit/edit.html.twig', array(
            'categoryHabit' => $categoryHabit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CategoryHabit entity.
     *
     * @Route("/{id}/delete", name="delete")
     */
    public function deleteAction(Request $request, CategoryHabit $categoryHabit)
    {
        $form = $this->createDeleteForm($categoryHabit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoryHabit);
            $em->flush();

            $this->addFlash('success', 'L\'élément a bien été supprimé.');
        }

        return $this->redirectToRoute('backend_categoryhabit_index');
    }

    /**
     * Creates a form to delete a CategoryHabit entity.
     *
     * @param CategoryHabit $categoryHabit The CategoryHabit entity
     *
     * @return \Symfony\Component\Form\Form The form
     *
     * @Route("/create", name="create")
     */
    private function createDeleteForm(CategoryHabit $categoryHabit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backend_categoryhabit_delete', array('id' => $categoryHabit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
