<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ClubSubject
 *
 * @ORM\Table(name="club_subject")
 * @ORM\Entity(repositoryClass="App\Repository\ClubSubjectRepository")
 */
class ClubSubject
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
     * @ORM\Column(name="title", type="string", length=191)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity="ClubSubject", mappedBy="parent", cascade={"remove"})
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="ClubSubject", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    /**
     * Many subjects have One list.
     * @ORM\ManyToOne(targetEntity="CategoryList", inversedBy="subjects", cascade={"remove"}, fetch="EAGER")
     * @ORM\JoinColumn(name="categorylist_id", referencedColumnName="id")
     */
    private $list;

    /**
     * @ORM\OneToMany(targetEntity="ClubArticle", mappedBy="clubSubject")
     */
    private $clubArticles;


    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->clubArticles = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getTitle();
    }

    public function getStringedParents($stack = null)
    {
        if ($this->getParent()) {
            if ($stack != null)
                return $this->getParent()->getStringedParents($this->getTitle()) . ' > ' . $stack;
            return $this->getParent()->getStringedParents($this->getTitle());
        }

        if ($stack != null)
            return $this->getTitle() . ' > ' . $stack;
        return $this->getTitle();
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
     * @return ClubSubject
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
     * Add clubArticle
     *
     * @param ClubArticle $clubArticle
     *
     * @return ClubSubject
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
     * @return ArrayCollection | ClubArticle[]
     */
    public function getClubArticles()
    {
        return $this->clubArticles;
    }

    /**
     * Add child
     *
     * @param ClubSubject $child
     *
     * @return ClubSubject
     */
    public function addChild(ClubSubject $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param ClubSubject $child
     */
    public function removeChild(ClubSubject $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return ArrayCollection | ClubSubject[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param ClubSubject $parent
     *
     * @return ClubSubject
     */
    public function setParent(ClubSubject $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return ClubSubject
     */
    public function getParent()
    {
        return $this->parent;
    }

    public function getVisibleCount() {
        $counter = 0;

        foreach ($this->getClubArticles() as $child) {
            if ($child->getVisible())
                $counter = $counter + 1;
        }

        return $counter;
    }

    /**
     * Set list
     *
     * @param \App\Entity\CategoryList $list
     *
     * @return ClubSubject
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
}
