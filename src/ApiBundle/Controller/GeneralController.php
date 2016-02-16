<?php

namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiBundle\Entity\GeneralInfo;
use ApiBundle\Entity\User;

/**
 * General info controller.
 *
 * @Route("/info/{authKey}")
 */
class GeneralController extends Controller
{
    /**
     * Lists all News entities.
     *
     * @Route("/", name="info_index")
     * @Method("GET")
     */
    public function indexAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
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
            'generalInfo'=>array_values($gni)
        ));
        return $response;
    }

    /**
     * Finds and displays a News entity.
     *
     * @Route("/{info_id}", name="info_show")
     * @ParamConverter("news", class="ApiBundle:GeneralInfo", options={"id" = "info_id"})
     * @Method("GET")
     */
    public function showAction(User $user, GeneralInfo $news)
    {
        $response = new JsonResponse();
        $response->setData(array(
            'data' => $news
        ));
        return $response;
    }
}
