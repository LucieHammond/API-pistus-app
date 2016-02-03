<?php

namespace ApiBundle\Repository;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNewsByTargets($arrayTargets){
        $return = array();
        foreach ($arrayTargets as $key => $target) {
            $return = array_merge($return,$this->findByTarget($target));
        }
        return $return;
    }
}
