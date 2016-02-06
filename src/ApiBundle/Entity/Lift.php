<?php

namespace ApiBundle\Entity;

use JsonSerializable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lift
 *
 * @ORM\Table(name="lift")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\LiftRepository")
 */
class Lift implements JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="realm", type="integer")
     */
    private $realm;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Lift
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Lift
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lift
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function jsonSerialize(){
        return array(
            'id'=>$this->id,
            'status'=>$this->status,
            'comment'=>$this->comment,
            'name'=>$this->name,
            'realm'=>$this->realm
        );
    }

    /**
     * Set realm
     *
     * @param integer $realm
     *
     * @return Lift
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * Get realm
     *
     * @return integer
     */
    public function getRealm()
    {
        return $this->realm;
    }
}
