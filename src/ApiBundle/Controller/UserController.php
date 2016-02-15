<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;


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
    * @Method("POST")
     */
    public function updateAction(User $user, Request $request){
        $res = $user->handleRequest($request);

        $this->getDoctrine()->getManager()->flush();
        $response = new JsonResponse();
        $response->setData(array(
            'data' => ($res)?"Success":"Error",
            'input'=>$request->request->all()
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
