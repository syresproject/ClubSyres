<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Habit
 *
 * @ORM\Table(name="habit")
 * @ORM\Entity(repositoryClass="App\Repository\HabitRepository")
 */
class Habit
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
     * @ORM\Column(name="name", type="string", length=191)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @ORM\ManyToOne(targetEntity="HeaderHabit", inversedBy="habits")
     * @ORM\JoinColumn(name="header_habit_id", referencedColumnName="id", nullable=false)
     */
    private $headerHabit;

    /**
     * @ORM\OneToMany(targetEntity="ClubArticle", mappedBy="habit")
     */
    private $clubArticles;

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
     * @return Habit
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
     * @return Habit
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
     * Set headerHabit
     *
     * @param \App\Entity\HeaderHabit $headerHabit
     *
     * @return Habit
     */
    public function setHeaderHabit(\App\Entity\HeaderHabit $headerHabit)
    {
        $this->headerHabit = $headerHabit;

        return $this;
    }

    /**
     * Get headerHabit
     *
     * @return \App\Entity\HeaderHabit
     */
    public function getHeaderHabit()
    {
        return $this->headerHabit;
    }

    /**
     * Add clubArticle
     *
     * @param \App\Entity\ClubArticle $clubArticle
     *
     * @return Habit
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
}
