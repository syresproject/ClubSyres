<?php

namespace App\Entity;

use App\Entity\Survey;
use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="paneliste_group")
 * @ORM\Entity(repositoryClass="App\Repository\PanelisteGroupRepository")
 */
class PanelisteGroup
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
     * @ORM\ManyToMany(targetEntity="User", mappedBy="panelisteGroups")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="Survey", mappedBy="panelisteGroup")
     */
    private $surveys;


    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->surveys = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getName();
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
     * Set name
     *
     * @param string $name
     *
     * @return \App\Entity\PanelisteGroup
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
     * Add user
     *
     * @param User $user
     *
     * @return PanelisteGroup
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param User $user
     */
    public function removeUser(User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return ArrayCollection | User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add survey
     *
     * @param Survey $survey
     *
     * @return PanelisteGroup
     */
    public function addSurvey(Survey $survey)
    {
        $this->surveys[] = $survey;

        return $this;
    }

    /**
     * Remove survey
     *
     * @param Survey $survey
     */
    public function removeSurvey(Survey $survey)
    {
        $this->surveys->removeElement($survey);
    }

    /**
     * Get surveys
     *
     * @return ArrayCollection | Survey[]
     */
    public function getSurveys()
    {
        return $this->surveys;
    }
}
