<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FocusAccesss
 *
 * @ORM\Table(name="focus_access")
 * @ORM\Entity(repositoryClass="App\Repository\FocusAccessRepository")
 */
class FocusAccess
{
    const ACCESS_BY_DEFAULT    = 0;
    const ACCESS_FORCED_YES    = 1;
    const ACCESS_FORCED_NO     = 2;

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
     * @ORM\Column(name="access", type="smallint")
     */
    private $access;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="focusAccesses")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="FocusGroup", inversedBy="focusAccesses")
     * @ORM\JoinColumn(name="focus_group_id", referencedColumnName="id")
     */
    private $focusGroup;


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
     * Set access
     *
     * @param integer $access
     *
     * @return FocusAccesss
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return int
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return FocusAccesss
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
     * Set focusGroup
     *
     * @param FocusGroup $focusGroup
     *
     * @return FocusAccesss
     */
    public function setFocusGroup(FocusGroup $focusGroup = null)
    {
        $this->focusGroup = $focusGroup;

        return $this;
    }

    /**
     * Get focusGroup
     *
     * @return FocusGroup
     */
    public function getFocusGroup()
    {
        return $this->focusGroup;
    }
}
