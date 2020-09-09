<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryHabit
 *
 * @ORM\Table(name="category_habit")
 * @ORM\Entity(repositoryClass="App\Repository\CategoryHabitRepository")
 */
class CategoryHabit
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
     * @var int
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @ORM\OneToMany(targetEntity="HeaderHabit", mappedBy="categoryHabit", cascade={"remove"})
     */
    private $headerHabits;

    /**
     * @ORM\OneToMany(targetEntity="ClubArticle", mappedBy="categoryHabit")
     */
    private $clubArticles;

    /**
     * @ORM\OneToMany(targetEntity="Brand", mappedBy="categoryHabit")
     */
    private $brands;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->headerHabits = new ArrayCollection();
        $this->clubArticles = new ArrayCollection();
        $this->brands = new ArrayCollection();
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
     * @return HeaderHabit
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
     * @return HeaderHabit
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
     * Add headerHabit
     *
     * @param \App\Entity\HeaderHabit $headerHabit
     *
     * @return CategoryHabit
     */
    public function addHeaderHabit(\App\Entity\HeaderHabit $headerHabit)
    {
        $this->headerHabits[] = $headerHabit;

        return $this;
    }

    /**
     * Remove headerHabit
     *
     * @param \App\Entity\HeaderHabit $headerHabit
     */
    public function removeHeaderHabit(\App\Entity\HeaderHabit $headerHabit)
    {
        $this->headerHabits->removeElement($headerHabit);
    }

    /**
     * Get headerHabits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHeaderHabits()
    {
        return $this->headerHabits;
    }

    /**
     * Add clubArticle
     *
     * @param \App\Entity\ClubArticle $clubArticle
     *
     * @return CategoryHabit
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
     * Add brand
     *
     * @param \App\Entity\Brand $brand
     *
     * @return CategoryHabit
     */
    public function addBrand(\App\Entity\Brand $brand)
    {
        $this->brands[] = $brand;

        return $this;
    }

    /**
     * Remove brand
     *
     * @param \App\Entity\Brand $brand
     */
    public function removeBrand(\App\Entity\Brand $brand)
    {
        $this->brands->removeElement($brand);
    }

    /**
     * Get brands
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBrands()
    {
        return $this->brands;
    }
}
