<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $lifts
        ));
        return $response;
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
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $lift
        ));
        return $response;
    }
}
