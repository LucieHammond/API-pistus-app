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
    public function updateAction(User $user, Request $request){
        $res = $user->handleRequest($request);
        $this->getDoctrine()->getManager()->flush();
        $response = new JsonResponse();
        $response->setData(array(
            'data' => array('data'=>($res)?"Success":"Error")
        ));
        return $response;
    }

    /**
     * @Route("/ranking", name="api_ranking")
     */
    public function rankingAction(User $user){
        $keys = ['maxSpeed', 'altMax', 'kmSki', 'skiTime'];
        $em = $this->getDoctrine()->getManager();
        $data = array();
        foreach ($keys as $key) {
            $func = "get" . ucfirst($key);
            $data[$key]=array();
            $data[$key]['count'] = $em->createQuery(
                "SELECT count(u.id) 
                FROM ApiBundle:User u 
                WHERE u.".$key." > :".$key
            )->setParameter($key, $user->$func())->getSingleResult();
            $data[$key]['ranking'] = $em->createQuery(
                "SELECT u 
                FROM ApiBundle:User u 
                ORDER BY u." . $key 
            )->setMaxResults(5)->getResult();
        }


        $response = new JsonResponse();
        $response->setData(array(
            'data' => $data
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
