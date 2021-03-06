<?php

namespace KikiceBundle\Controller;

use KikiceBundle\Entity\reponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Reponse controller.
 *
 * @Route("reponse")
 */
class reponseController extends Controller
{
    /**
     * Lists all reponse entities.
     *
     * @Route("/", name="reponse_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reponses = $em->getRepository('KikiceBundle:reponse')->findAll();

        return $this->render('reponse/index.html.twig', array(
            'reponses' => $reponses,
        ));
    }

    /**
     * Creates a new reponse entity.
     *
     * @Route("/new", name="reponse_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reponse = new Reponse();
        $form = $this->createForm('KikiceBundle\Form\reponseType', $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('reponse_show', array('id' => $reponse->getId()));
        }

        return $this->render('reponse/new.html.twig', array(
            'reponse' => $reponse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reponse entity.
     *
     * @Route("/{id}", name="reponse_show")
     * @Method("GET")
     */
    public function showAction(reponse $reponse)
    {
        $deleteForm = $this->createDeleteForm($reponse);

        return $this->render('reponse/show.html.twig', array(
            'reponse' => $reponse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reponse entity.
     *
     * @Route("/{id}/edit", name="reponse_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, reponse $reponse)
    {
        $deleteForm = $this->createDeleteForm($reponse);
        $editForm = $this->createForm('KikiceBundle\Form\reponseType', $reponse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reponse_edit', array('id' => $reponse->getId()));
        }

        return $this->render('reponse/edit.html.twig', array(
            'reponse' => $reponse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reponse entity.
     *
     * @Route("/{id}", name="reponse_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, reponse $reponse)
    {
        $form = $this->createDeleteForm($reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reponse);
            $em->flush();
        }

        return $this->redirectToRoute('reponse_index');
    }

    /**
     * Creates a form to delete a reponse entity.
     *
     * @param reponse $reponse The reponse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(reponse $reponse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reponse_delete', array('id' => $reponse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
