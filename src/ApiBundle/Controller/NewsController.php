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
        $myNews = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:News n
            JOIN ApiBundle:User u WITH u.authKey = :ak
            JOIN u.targets t
            WHERE n.target = t.name
            ORDER BY n.date DESC"
        )->setParameter('ak', $user->getAuthKey())->getResult();
        $generalNews = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:News n WHERE n.target = 'all' ORDER BY n.date DESC")->getResult();
        $generalInfos = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:GeneralInfo n")->getResult();
        $gi = array();
        //Foutu pour foutu...
        foreach ($generalInfos as $key => $info) {
            $gi[$info->getParent()]=array("order"=>$info->getZorder(), "data"=>array());
        }
        foreach ($generalInfos as $key => $info) {
            $gi[$info->getParent()]['parent']= $info->getParent();
            $gi[$info->getParent()]["order"]=min($info->getZorder(), $gi[$info->getParent()]["order"]);
            $gi[$info->getParent()]["data"][]=$info;
        }
        $gni = array();
        foreach ($gi as $key => $value) {
            $nvalue = array();
            foreach ($value["data"] as $k => $v) {
                $nvalue[$v->getZorder()]=$v;
            }
            krsort($nvalue);
            $gni[$value["order"]]=array("title"=> $value["parent"], "infos"=>array_values($nvalue));
            
        }
        krsort($gni);
        $response = new JsonResponse();
        $response->setData(array(
            'myNews' => $myNews,
            'generalNews' => $generalNews,
            'generalInfo' => $gni
        ));
        return $response;
    }

    /**
     * Lists all News entities.
     *
     * @Route("/my", name="news_index_my")
     * @Method("GET")
     */
    public function indexMyAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $myNews = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:News n
            JOIN ApiBundle:User u WITH u.authKey = :ak
            JOIN u.targets t
            WHERE n.target = t.name
            ORDER BY n.date DESC"
        )->setParameter('ak', $user->getAuthKey())->getResult();

        $response = new JsonResponse();
        $response->setData(array(
            'myNews' => $myNews
        ));
        return $response;
    }

    /**
     * Lists all News entities.
     *
     * @Route("/general", name="news_index_general")
     * @Method("GET")
     */
    public function indexGeneralAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();

        $generalNews = $em->createQuery(
            "SELECT DISTINCT n
            FROM ApiBundle:News n WHERE n.target = 'all' ORDER BY n.date DESC")->getResult();

        $response = new JsonResponse();
        $response->setData(array(
            'generalNews' => $generalNews
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
