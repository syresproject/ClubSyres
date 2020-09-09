<?php

namespace App\Entity;

use App\Entity\FocusGroup;
use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/*
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;
*/

/**
 * @ORM\Entity(repositoryClass="App\Repository\FocusMessageRepository")
 */
class FocusMessage
{
    /**

    use TimestampableEntity;
*/
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
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="FocusGroup", inversedBy="focusMessages")
     * @ORM\JoinColumn(name="focus_group_id", referencedColumnName="id")
     */
    private $focusGroup;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="focusMessages")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="FocusMessage", mappedBy="parent", cascade={"remove"})
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="FocusMessage", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /*
     * Constructor
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->visible = false;
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
     * Set content
     *
     * @param string $content
     *
     * @return FocusMessage
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
     * Set focusGroup
     *
     * @param \App\Entity\FocusGroup $focusGroup
     *
     * @return FocusMessage
     */
    public function setFocusGroup(\App\Entity\FocusGroup $focusGroup = null)
    {
        $this->focusGroup = $focusGroup;

        return $this;
    }

    /**
     * Get focusGroup
     *
     * @return \App\Entity\FocusGroup
     */
    public function getFocusGroup()
    {
        return $this->focusGroup;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return FocusMessage
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add child
     *
     * @param FocusMessage $child
     *
     * @return FocusMessage
     */
    public function addChild(FocusMessage $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param FocusMessage $child
     */
    public function removeChild(FocusMessage $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param FocusMessage $parent
     *
     * @return FocusMessage
     */
    public function setParent(FocusMessage $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return FocusMessage
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return FocusMessage
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
}
