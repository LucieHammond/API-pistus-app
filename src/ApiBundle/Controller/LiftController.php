<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use ApiBundle\Entity\Lift;
use ApiBundle\Entity\User;

/**
 * Lift controller.
 *
 * @Route("/lift/{authKey}")
 */
class LiftController extends Controller
{
    /**
     * Lists all Lift entities.
     *
     * @Route("/", name="lift_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $lifts = $em->getRepository('ApiBundle:Lift')->findAll();
        return new Response(json_encode($lifts));
    }

    /**
     * Finds and displays a Lift entity.
     *
     * @Route("/{lift_id}", name="lift_show")
     * @ParamConverter("lift", class="ApiBundle:Lift", options={"id" = "lift_id"})
     * @Method("GET")
     */
    public function showAction(User $user, Lift $lift)
    {
        return new Response(json_encode($lift));
    }
}
