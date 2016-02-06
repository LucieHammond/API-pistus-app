<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $slopes
        ));
        return $response;
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
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $slope
        ));
        return $response;
    }
}
