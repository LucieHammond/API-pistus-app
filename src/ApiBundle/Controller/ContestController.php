<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use ApiBundle\Entity\Contest;
use ApiBundle\Entity\User;
/**
 * Contest controller.
 *
 * @Route("/contest/{authKey}")
 */
class ContestController extends Controller
{
    /**
     * Lists all Contest entities.
     *
     * @Route("/", name="contest_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $contests = $em->getRepository('ApiBundle:Contest')->findAll();
        return new Response(json_encode($contests));
    }

    /**
     * Finds and displays a Contest entity.
     *
     * @Route("/{id}", name="contest_show")
     * @Method("GET")
     */
    public function showAction(User $user, Contest $contest)
    {
        return new Response(json_encode($contest));
    }
}
