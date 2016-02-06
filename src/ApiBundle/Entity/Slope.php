<?php

namespace ApiBundle\Entity;


use JsonSerializable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Slope
 *
 * @ORM\Table(name="slope")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\SlopeRepository")
 */
class Slope implements JsonSerializable
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=1024, nullable=true)
     */
    private $comment;

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
     * @return Slope
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
     * Set name
     *
     * @param string $name
     *
     * @return Slope
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

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Slope
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
     * @return Slope
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
