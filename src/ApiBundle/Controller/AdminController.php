<?php

namespace ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use ApiBundle\Entity\News;
use ApiBundle\Form\NewsType;
/**
 * new controller.
 *
 * @Route("/admin/news")
 */
class AdminController extends Controller
{
    /**
     * Lists all new entities.
     *
     * @Route("/", name="admin_new_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('ApiBundle:News')->findAll();

        return $this->render('news/index.html.twig', array(
            'news' => $news,
        ));
    }

    /**
     * Creates a new new entity.
     *
     * @Route("/new", name="admin_new_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $news = new News();
        $em = $this->getDoctrine()->getManager();
        $choices = $em->getRepository('ApiBundle:Target')->findAll();
        $c = array('all'=>'all');
        foreach ($choices as $key => $value) {
            $c[$value->getName()]=$value->getName();
        }
        $form = $this->createForm('ApiBundle\Form\NewsType', $news, array('choices'=>$c));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            return $this->redirectToRoute('admin_new_show', array('id' => $news->getId()));
        }

        return $this->render('News/new.html.twig', array(
            'news' => $news,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a new entity.
     *
     * @Route("/{id}", name="admin_new_show")
     * @Method("GET")
     */
    public function showAction(News $new)
    {
        $deleteForm = $this->createDeleteForm($new);

        return $this->render('News/show.html.twig', array(
            'news' => $new,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing new entity.
     *
     * @Route("/{id}/edit", name="admin_new_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, News $new)
    {
        $deleteForm = $this->createDeleteForm($new);
        $em = $this->getDoctrine()->getManager();
        $choices = $em->getRepository('ApiBundle:Target')->findAll();
        $c = array('all'=>'all');
        foreach ($choices as $key => $value) {
            $c[$value->getName()]=$value->getName();
        }
        $editForm = $this->createForm('ApiBundle\Form\NewsType', $new, array('choices'=>$c));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($new);
            $em->flush();

            return $this->redirectToRoute('admin_new_edit', array('id' => $new->getId()));
        }

        return $this->render('News/edit.html.twig', array(
            'news' => $new,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a new entity.
     *
     * @Route("/{id}", name="admin_new_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, News $new)
    {
        $form = $this->createDeleteForm($new);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($new);
            $em->flush();
        }

        return $this->redirectToRoute('admin_new_index');
    }

    /**
     * Creates a form to delete a new entity.
     *
     * @param new $new The new entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(News $new)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_new_delete', array('id' => $new->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
