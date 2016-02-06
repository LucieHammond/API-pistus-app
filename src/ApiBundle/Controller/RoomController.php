<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
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
     * @Route("/", name="room_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository('ApiBundle:Room')->findAll();
        return new Response(json_encode($rooms));
    }

    /**
     * Finds and displays a Room entity.
     *
     * @Route("/{room_id}", name="room_show")
     * @ParamConverter("room", class="ApiBundle:Room", options={"id" = "room_id"})
     * @Method("GET")
     */
    public function showAction(User $user, Room $room)
    {
        return new Response(json_encode($room));
    }
}
