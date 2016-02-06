<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $users
        ));
        return $response;
    }

    /**
     * @Route("/update", name="apiUpdate")
     */
    public function updateAction(AppUser $user, Request $request){
        $res = $user->handleRequest($request);
        $this->getDoctrine()->getManager()->flush();
        $response = new JsonResponse();
        $response->setData(array(
            'data' => array('data'=>($res)?"Success":"Error")
        ));
        return $response;
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
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $target
        ));
        return $response;
    }
}
