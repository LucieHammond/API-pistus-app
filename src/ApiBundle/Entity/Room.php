<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\RoomRepository")
 */
class Room implements JsonSerializable
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
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @ORM\OneToMany(targetEntity="ApiBundle\Entity\User", mappedBy="room", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $roomates;

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
     * Set number
     *
     * @param integer $number
     *
     * @return Room
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roomates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add roomate
     *
     * @param \ApiBundle\Entity\User $roomate
     *
     * @return Room
     */
    public function addRoomate(\ApiBundle\Entity\User $roomate)
    {
        $this->roomates[] = $roomate;

        return $this;
    }

    /**
     * Remove roomate
     *
     * @param \ApiBundle\Entity\User $roomate
     */
    public function removeRoomate(\ApiBundle\Entity\User $roomate)
    {
        $this->roomates->removeElement($roomate);
    }

    /**
     * Get roomates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoomates()
    {
        return $this->roomates;
    }

    public function jsonSerialize(){

        return array(
            'id'=>$this->id,
            'number'=>$this->number,
            'roomates'=>$this->roomates,
            'comment'=>$this->comment
        );
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Room
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
}
