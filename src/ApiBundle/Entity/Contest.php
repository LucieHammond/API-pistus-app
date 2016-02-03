<?php

namespace ApiBundle\Entity;

use JsonSerializable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contest
 *
 * @ORM\Table(name="contest")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\ContestRepository")
 */
class Contest implements JsonSerializable
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\User", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $first;

    /**
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\User", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $second;

    /**
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\User", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $third;

    /**
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\User", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $fourth;
    

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
     * Set name
     *
     * @param string $name
     *
     * @return Contest
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
            'name'=>$this->name, 
            'podium'=> array(
                0 => $this->first,
                1 => $this->second,
                2 => $this->third,
                3 => $this->fourth,
            )
        );
    }

    /**
     * Set first
     *
     * @param \ApiBundle\Entity\User $first
     *
     * @return Contest
     */
    public function setFirst(\ApiBundle\Entity\User $first = null)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Get first
     *
     * @return \ApiBundle\Entity\User
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set second
     *
     * @param \ApiBundle\Entity\User $second
     *
     * @return Contest
     */
    public function setSecond(\ApiBundle\Entity\User $second = null)
    {
        $this->second = $second;

        return $this;
    }

    /**
     * Get second
     *
     * @return \ApiBundle\Entity\User
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Set third
     *
     * @param \ApiBundle\Entity\User $third
     *
     * @return Contest
     */
    public function setThird(\ApiBundle\Entity\User $third = null)
    {
        $this->third = $third;

        return $this;
    }

    /**
     * Get third
     *
     * @return \ApiBundle\Entity\User
     */
    public function getThird()
    {
        return $this->third;
    }

    /**
     * Set fourth
     *
     * @param \ApiBundle\Entity\User $fourth
     *
     * @return Contest
     */
    public function setFourth(\ApiBundle\Entity\User $fourth = null)
    {
        $this->fourth = $fourth;

        return $this;
    }

    /**
     * Get fourth
     *
     * @return \ApiBundle\Entity\User
     */
    public function getFourth()
    {
        return $this->fourth;
    }
}
