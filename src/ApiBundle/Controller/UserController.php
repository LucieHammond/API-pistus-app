<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use ApiBundle\Entity\User;

/**
 * User controller.
 *
 * @Route("/user/{authKey}")
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('ApiBundle:User')->findAll();
        return new Response(json_encode($users));
    }

    /**
     * @Route("/update", name="apiUpdate")
     */
    public function updateAction(AppUser $user, Request $request){
        $res = $user->handleRequest($request);
        $this->getDoctrine()->getManager()->flush();
        return new Response(json_encode(array('Result'=>($res)?"Success":"Error")));
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/{user_login}", name="user_show")
     * @ParamConverter("target", class="ApiBundle:User", options={"login" = "user_login"})
     * @Method("GET")
     */
    public function showAction(User $user, User $target)
    {
        return new Response(json_encode($target));
    }
}
