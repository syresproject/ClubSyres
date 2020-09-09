<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * CategoryItem
 *
 * @ORM\Table(name="category_item")
 * @ORM\Entity(repositoryClass="App\Repository\CategoryItemRepository")
 */
class CategoryItem
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
     * Many item have One list.
     * @ORM\ManyToOne(targetEntity="CategoryList", inversedBy="items")
     * @ORM\JoinColumn(name="categorylist_id", referencedColumnName="id")
     */
    private $list;

    /**
     * One Item has many articles.
     * @ORM\OneToMany(targetEntity="ClubArticle", mappedBy="item")
     */
    private $articles;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=191)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    public function __toString()
    {
        return $this->title;
    }


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
     * Set title
     *
     * @param string $title
     *
     * @return CategoryItem
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
     * Set list
     *
     * @param \App\Entity\CategoryList $list
     *
     * @return CategoryItem
     */
    public function setList(\App\Entity\CategoryList $list = null)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Get list
     *
     * @return \App\Entity\CategoryList
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \App\Entity\ClubArticle $article
     *
     * @return CategoryItem
     */
    public function addArticle(\App\Entity\ClubArticle $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \App\Entity\ClubArticle $article
     */
    public function removeArticle(\App\Entity\ClubArticle $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return CategoryItem
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }
}
