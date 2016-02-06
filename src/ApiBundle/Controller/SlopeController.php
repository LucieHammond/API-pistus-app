<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use ApiBundle\Entity\Slope;
use ApiBundle\Entity\User;

/**
 * Slope controller.
 *
 * @Route("/slope/{authKey}")
 */
class SlopeController extends Controller
{
    /**
     * Lists all Slope entities.
     *
     * @Route("/", name="slope_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $slopes = $em->getRepository('ApiBundle:Slope')->findAll();
        return new Response(json_encode($slopes));
    }

    /**
     * Finds and displays a Slope entity.
     *
     * @Route("/{slope_id}", name="slope_show")
     * @ParamConverter("slope", class="ApiBundle:Slope", options={"id" = "slope_id"})
     * @Method("GET")
     */
    public function showAction(User $user, Slope $slope)
    {
        return new Response(json_encode($slope));
    }
}
