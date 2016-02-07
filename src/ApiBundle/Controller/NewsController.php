<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
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
        $myNews = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:News n
            JOIN ApiBundle:User u WITH u.authKey = :ak
            JOIN u.targets t
            WHERE n.target = t.name
            ORDER BY n.date ASC"
        )->setParameter('ak', $user->getAuthKey())->getResult();;
        $generalNews = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:News n WHERE n.target = 'all' ORDER BY n.date ASC");

        $response = new JsonResponse();
        $response->setData(array(
            'myNews' => $myNews,
            'generalNews' => $generalNews
        )));
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
