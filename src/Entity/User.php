<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM ;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface

{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @var integer
     *
     * @ORM\Column(name="id_paneliste", type="integer", unique=true)
     */
    private $idPaneliste;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=191)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=191)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=191)
     *
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=180, nullable=true, unique=false)
     */
    private $email;

    /**
     * @var date $birthday
     *
     * @ORM\Column(name="birthdate", type="datetime", nullable=true)
     */
    private $birthdate;

    /**
     * @return Date
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param \DateTimeInterface $birthdate
     */
    public function setBirthdate(\DateTimeInterface $birthdate)
    {
        $this->birthdate = $birthdate;
    }



    /**
     * @ORM\PrePersist()
     */
    public function setEnabledStatut()
    {
        if ($this->statut == 'Z' || $this->statut == 'X' || $this->statut == 'Y' ){
            $this->enabled = false;
        }
    }

    /**
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled): void
    {
        $this->enabled = $enabled;
    }


    public function __construct()
    {
        $this->panelisteGroups = new ArrayCollection();
        $this->focusMessages = new ArrayCollection();
        $this->focusAccesses = new ArrayCollection();
        $this->roles = new ArrayCollection();

    }





    /**
     * @ORM\ManyToMany(targetEntity="PanelisteGroup", inversedBy="users", cascade={"persist"})
     * @ORM\JoinTable(name="paneliste_groups")
     */
    protected $panelisteGroups;

    /**
     * @ORM\ManyToMany(targetEntity="Survey", inversedBy="users", cascade={"persist"})
     * @ORM\JoinTable(name="id_survey")
     */
    protected $id_survey;

    /**
     * @return mixed
     */
    public function getIdSurvey()
    {
        return $this->id_survey;
    }

    /**
     * @param mixed $id_survey
     */
    public function setIdSurvey($id_survey): void
    {
        $this->id_survey = $id_survey;
    }




    /**
     * @ORM\OneToMany(targetEntity="FocusMessage", mappedBy="user")
     */
    private $focusMessages;

    /**
     * @ORM\OneToMany(targetEntity="FocusAccesss", mappedBy="user")
     */
    private $focusAccesses;



    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;


    /**
     * @ORM\Column(name="statut", type="string")
     */
    private $statut;

    /**
     * @var date $createdAt
     *a
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @return Date
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param Date $createdAt
     */
    public function setCreatedAt(Date $createdAt): void
    {
        $this->createdAt = $createdAt;
    }


    /**
     * Add panelisteGroup
     *
     * @param PanelisteGroup $panelisteGroup
     *
     * @return User
     */
    public function addPanelisteGroup(PanelisteGroup $panelisteGroup)
    {
        $this->panelisteGroups[] = $panelisteGroup;

        return $this;
    }

    /**
     * Remove panelisteGroup
     *
     * @param PanelisteGroup $panelisteGroup
     */
    public function removePanelisteGroup(PanelisteGroup $panelisteGroup)
    {
        $this->panelisteGroups->removeElement($panelisteGroup);
    }

    /**
     * Get panelisteGroups
     *
     * @return ArrayCollection | PanelisteGroup[]
     */
    public function getPanelisteGroups()
    {
        return $this->panelisteGroups;
    }


    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $password;

    /**
     * @ORM\ManyToMany(targetEntity=Roles::class)
     */
    private $roles;


    /*
     * @ORM\Column(type="string")
     * /
    private $role;


    public function getRoles()
    {
        $role = $this->role;
        // guarantee every user at least has ROLE_USER
        $role[] = 'ROLE_USER';

        return array_unique($role);
    }
    */




    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }




    public function hasRole($role)
    {
        if($this->roles->indexOf($role) == false){
            return false;
        }


       // dump($this->roles);
        return true;
    }




    /**
     * @see UserInterface
     */
    public function getPassword()
    {
        return (string) $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return ArrayCollection
     */
    public function getFocusMessages(): ArrayCollection
    {
        return $this->focusMessages;
    }

    /**
     * @param ArrayCollection $focusMessages
     */
    public function setFocusMessages(ArrayCollection $focusMessages): void
    {
        $this->focusMessages = $focusMessages;
    }

    /**
     * @return ArrayCollection
     */
    public function getFocusAccesses(): ArrayCollection
    {
        return $this->focusAccesses;
    }

    /**
     * @param ArrayCollection $focusAccesses
     */
    public function setFocusAccesses(ArrayCollection $focusAccesses): void
    {
        $this->focusAccesses = $focusAccesses;
    }


    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }


    /**
     * @return int
     */
    public function getIdPaneliste()
    {
        return $this->idPaneliste;
    }

    /**
     * @param $idPaneliste
     */
    public function setIdPaneliste($idPaneliste)
    {
        $this->idPaneliste = $idPaneliste;
    }



    /**
     * @return Collection|Role[]
     */
    public function getRolesUsers()
    {
        return $this->roles;
    }


    /*
    public function addRole(Role $role)
    {
        if (!$this->roles->contains($role)) {
            $this->roles[] = $role;
        }

        return $this;
    }

    public function removeRole(Role $role)
    {
        if ($this->roles->contains($role)) {
            $this->roles->removeElement($role);
        }

        return $this;
    }
*/


    public function getRoles()
    {
        $roles = $this->roles->map(function ($role) {
            return $role->getLibelle();
        })->toArray();

        $roles [] = "ROLE_USER";
        //return array_unique($roles);
        return $roles;
    }


    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }



}

