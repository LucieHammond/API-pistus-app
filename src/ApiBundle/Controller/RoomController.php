<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiBundle\Entity\Room;
use ApiBundle\Entity\User;

/**
 * Room controller.
 *
 * @Route("/room/{authKey}")
 */
class RoomController extends Controller
{
    /**
     * Lists all Room entities.
     *
     * @Route("/all", name="room_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository('ApiBundle:Room')->findAll();
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $rooms
        ));
        return $response;
    }

    /**
     * Finds and displays a Room entity.
     *
     * @Route("/my", name="room_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $user->getRoom()
        ));
        return $response;
    }
}
