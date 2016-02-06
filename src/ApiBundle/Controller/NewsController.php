<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiBundle\Entity\News;
use ApiBundle\Entity\User;

/**
 * News controller.
 *
 * @Route("/news/{authKey}")
 */
class NewsController extends Controller
{
    /**
     * Lists all News entities.
     *
     * @Route("/", name="news_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:News n
            JOIN ApiBundle:User u WITH u.id = :uid
            JOIN u.targets t
            WHERE n.target = 'all' OR n.target = t.name
            ORDER BY n.date ASC"
        )->setParameter('uid', $user->getId())->getResult();
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $news
        ));
        return $response;
    }

    /**
     * Finds and displays a News entity.
     *
     * @Route("/{news_id}", name="news_show")
     * @ParamConverter("news", class="ApiBundle:News", options={"id" = "news_id"})
     * @Method("GET")
     */
    public function showAction(User $user, News $news)
    {
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $news
        ));
        return $response;
    }
}
