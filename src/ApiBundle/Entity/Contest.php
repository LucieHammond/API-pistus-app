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
     * @var string
     *
     * @ORM\Column(name="first", type="string", length=255)
     */
    private $first;

    /**
     * @var string
     *
     * @ORM\Column(name="second", type="string", length=255)
     */
    private $second;

    /**
     * @var string
     *
     * @ORM\Column(name="third", type="string", length=255)
     */
    private $third;

    /**
     * @var string
     *
     * @ORM\Column(name="fourth", type="string", length=255)
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
            'id'=>$this->id,
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
     * @param string $first
     *
     * @return Contest
     */
    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Get first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set second
     *
     * @param string $second
     *
     * @return Contest
     */
    public function setSecond($second)
    {
        $this->second = $second;

        return $this;
    }

    /**
     * Get second
     *
     * @return string
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Set third
     *
     * @param string $third
     *
     * @return Contest
     */
    public function setThird($third)
    {
        $this->third = $third;

        return $this;
    }

    /**
     * Get third
     *
     * @return string
     */
    public function getThird()
    {
        return $this->third;
    }

    /**
     * Set fourth
     *
     * @param string $fourth
     *
     * @return Contest
     */
    public function setFourth($fourth)
    {
        $this->fourth = $fourth;

        return $this;
    }

    /**
     * Get fourth
     *
     * @return Contest
     */
    public function getFourth()
    {
        return $this->fourth;
    }
}
