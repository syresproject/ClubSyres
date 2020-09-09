<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity(repositoryClass="App\Repository\BrandRepository")
 */
class Brand
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
     * @ORM\Column(name="name", type="string", length=155, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="ClubArticle", mappedBy="brand")
     */
    private $clubArticles;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryHabit", inversedBy="brands")
     * @ORM\JoinColumn(name="category_habit_id", referencedColumnName="id", nullable=true)
     */
    private $categoryHabit;

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clubArticles = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer
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
     * @return Brand
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
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Brand
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Add clubArticle
     *
     * @param \App\Entity\ClubArticle $clubArticle
     *
     * @return Brand
     */
    public function addClubArticle(\App\Entity\ClubArticle $clubArticle)
    {
        $this->clubArticles[] = $clubArticle;

        return $this;
    }

    /**
     * Remove clubArticle
     *
     * @param \App\Entity\ClubArticle $clubArticle
     */
    public function removeClubArticle(\App\Entity\ClubArticle $clubArticle)
    {
        $this->clubArticles->removeElement($clubArticle);
    }

    /**
     * Get clubArticles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClubArticles()
    {
        return $this->clubArticles;
    }

    /**
     * Set categoryHabit
     *
     * @param \App\Entity\CategoryHabit $categoryHabit
     *
     * @return Brand
     */
    public function setCategoryHabit(\App\Entity\CategoryHabit $categoryHabit = null)
    {
        $this->categoryHabit = $categoryHabit;

        return $this;
    }

    /**
     * Get categoryHabit
     *
     * @return \App\Entity\CategoryHabit
     */
    public function getCategoryHabit()
    {
        return $this->categoryHabit;
    }
}
