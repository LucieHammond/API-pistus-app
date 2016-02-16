<?php

namespace ApiBundle\Entity;

use JsonSerializable;
use Doctrine\ORM\Mapping as ORM;

/**
 * GeneralInfo
 *
 * @ORM\Table(name="general_info")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\GeneralInfoRepository")
 */
class GeneralInfo implements JsonSerializable
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
     * @ORM\Column(name="zorder", type="integer", nullable=true)
     */
    private $zorder;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=255)
     */
    private $parent;


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
     * Set zorder
     *
     * @param integer $zorder
     *
     * @return GeneralInfo
     */
    public function setZorder($zorder)
    {
        $this->zorder = $zorder;

        return $this;
    }

    /**
     * Get zorder
     *
     * @return int
     */
    public function getZorder()
    {
        return $this->zorder;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return GeneralInfo
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return GeneralInfo
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set parent
     *
     * @param string $parent
     *
     * @return GeneralInfo
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    public function jsonSerialize(){
        return array(
            'id'=>$this->id,
            'title'=>$this->title,
            'comment'=>$this->content
        );
    }
}

