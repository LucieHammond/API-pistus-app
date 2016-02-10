<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use ApiBundle\Entity\User;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return new Response("Hello World");
    }

    /**
     * @Route("/auth/{login}", name="apiAuth")
     */
    public function authAction(User $user, Request $request) //Automatically retrieves the eleve through inference of login (see http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html)
    {
        if (substr($request->getContent(), 0, 1) == "{")
        {
            $data = json_decode($request->getContent(), true);
            $pass = $data['pass'];
        } else {
            $pass = $request->get('pass');
        }
        if ($user->getHash() != $pass)
            return new Response('Password Error', 403, array());
        if(!$user->getAuthKey())
            $user->setAuthKey(uniqid());
        $this->getDoctrine()->getManager()->flush();
        $data = array('authKey' => $user->getAuthKey(), 'data' => $user );
        $response = new JsonResponse();
        $response->setData($data);
        return $response;
    }

    /**
     * @Route("/ranking/{authKey}", name="api_ranking")
     */
    public function rankingAction(User $user){
        $keys = ['maxSpeed', 'altMax', 'kmSki', 'skiTime'];
        $em = $this->getDoctrine()->getManager();
        $data = array();
        foreach ($keys as $key) {
            $func = "get" . ucfirst($key);
            $data[$key]=array();
            $data[$key]['count'] = intval($em->createQuery(
                "SELECT count(u.id) 
                FROM ApiBundle:User u 
                WHERE u.".$key." > :".$key
            )->setParameter($key, $user->$func())->getSingleResult()['1'])+1;
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
}
