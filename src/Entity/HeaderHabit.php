<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * HeaderHabit
 *
 * @ORM\Table(name="header_habit")
 * @ORM\Entity(repositoryClass="App\Repository\HeaderHabitRepository")
 */
class HeaderHabit
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
     * @ORM\Column(name="name", type="string", length=191, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryHabit", inversedBy="headerHabits")
     * @ORM\JoinColumn(name="category_habit_id", referencedColumnName="id", nullable=false)
     */
    private $categoryHabit;

    /**
     * @ORM\OneToMany(targetEntity="Habit", mappedBy="headerHabit", cascade={"remove"})
     */
    private $habits;

    /**
     * @ORM\OneToMany(targetEntity="ClubArticle", mappedBy="headerHabit")
     */
    private $clubArticles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habits = new ArrayCollection();
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
     * Add habit
     *
     * @param Habit $habit
     *
     * @return HeaderHabit
     */
    public function addHabit(Habit $habit)
    {
        $this->habits[] = $habit;

        return $this;
    }

    /**
     * Remove habit
     *
     * @param Habit $habit
     */
    public function removeHabit(Habit $habit)
    {
        $this->habits->removeElement($habit);
    }

    /**
     * Get habits
     *
     * @return Collection
     */
    public function getHabits()
    {
        return $this->habits;
    }

    /**
     * Set categoryHabit
     *
     * @param \App\Entity\CategoryHabit $categoryHabit
     *
     * @return HeaderHabit
     */
    public function setCategoryHabit(CategoryHabit $categoryHabit)
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

    /**
     * Add clubArticle
     *
     * @param ClubArticle $clubArticle
     *
     * @return HeaderHabit
     */
    public function addClubArticle(ClubArticle $clubArticle)
    {
        $this->clubArticles[] = $clubArticle;

        return $this;
    }

    /**
     * Remove clubArticle
     *
     * @param ClubArticle $clubArticle
     */
    public function removeClubArticle(ClubArticle $clubArticle)
    {
        $this->clubArticles->removeElement($clubArticle);
    }

    /**
     * Get clubArticles
     *
     * @return Collection
     */
    public function getClubArticles()
    {
        return $this->clubArticles;
    }
}
