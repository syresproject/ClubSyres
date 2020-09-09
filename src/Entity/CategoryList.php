<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorylist
 *
 * @ORM\Table(name="categorylist")
 * @ORM\Entity(repositoryClass="App\Repository\CategorylistRepository")
 */
class CategoryList
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
     * One List has many Items.
     * @ORM\OneToMany(targetEntity="CategoryItem", mappedBy="list", fetch="EAGER")
     * @ORM\OrderBy({"position" = "ASC"})
     */
    private $items;

    /**
     * One List has many Subjects.
     * @ORM\OneToMany(targetEntity="ClubSubject", mappedBy="list")
     */
    private $subjects;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=155, unique=true)
     */
    private $title;

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
     * @return CategoryList
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
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->title;
    }

    /**
     * Add item
     *
     * @param \App\Entity\CategoryList $item
     *
     * @return CategoryList
     */
    public function addItem(\App\Entity\CategoryList $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \App\Entity\CategoryList $item
     */
    public function removeItem(\App\Entity\CategoryList $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Add subject
     *
     * @param \App\Entity\ClubSubject $subject
     *
     * @return CategoryList
     */
    public function addSubject(\App\Entity\ClubSubject $subject)
    {
        $this->subjects[] = $subject;

        return $this;
    }

    /**
     * Remove subject
     *
     * @param \App\Entity\ClubSubject $subject
     */
    public function removeSubject(\App\Entity\ClubSubject $subject)
    {
        $this->subjects->removeElement($subject);
    }

    /**
     * Get subjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
}
