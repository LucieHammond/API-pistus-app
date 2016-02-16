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
        if (substr($request->getContent(), 0, 1) == "{")
        {
            $data = json_decode($request->getContent(), true);
        } else {
            $data = $request->request->all();
        }
        $res = $user->handleRequest($data);

        $this->getDoctrine()->getManager()->flush();
        $response = new JsonResponse();
        $response->setData(array(
            'data' => ($res)?"Success":"Error",
            'input'=>$data,
        ));
        return $response;
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/{user_login}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user, $user_login)
    {
        $target = $this->getDoctrine()->getManager()->getRepository('ApiBundle:User')->findByLogin($user_login);
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $target
        ));
        return $response;
    }
}
