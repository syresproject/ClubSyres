<?php

namespace App\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;

/**
 * Contact controller.
 *
 * @Route("/admin/contact", name="admin_")
 */

class ContactController extends AbstractController
{

    /**
     * Lists all Contact entities.
     * @Route("/", name="contact_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('App:Contact')->findBy(array(), array('id' => 'DESC'));

        return $this->render('Backend/Contact/index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Contact entity.*
     * @Route("/{id}/show", name="contact_show")
     * @param $id
     * @return Response
     */

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('App:Contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Backend/Contact/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Contact entity.
     *
     * @Route("/{id}/delete", name="contact_delete")
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('App:Contact')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contact entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_contact_index'));
    }

    /**
     * Creates a form to delete a Contact entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return FormInterface
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_contact_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
