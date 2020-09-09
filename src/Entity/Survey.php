<?php

namespace App\Entity;

use App\Entity\Category;
use App\Entity\FocusGroup;
use App\Entity\Link;
use App\Entity\PanelisteGroup;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;



/**
 * @ORM\Entity(repositoryClass="App\Repository\SurveyRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class Survey
{
    const ENQUETE = 0;
    const PRE_RECRUTEMENT = 1;
    const TEST = 2;

    const A_VENIR = 0;
    const EN_COURS = 1;
    const FOCUS_GROUP = 2;
    const CLOTURE = 3;

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
     * @ORM\Column(name="id_survey", type="integer", unique=true)
     */
    private $idSurvey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="smallint")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="external_type", type="string", nullable=true)
     */
    private $externalType;

    const EXTERNAL_TYPE_FIELDS = [
        'G_DOC' => 'G_DOC',
        'MODALISA' => 'MODALISA'
    ];

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;





    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="surveys")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="PanelisteGroup", inversedBy="surveys")
     * @ORM\JoinColumn(name="paneliste_group_id", referencedColumnName="id")
     */
    private $panelisteGroup;

    /**
     * @ORM\OneToMany(targetEntity="Link", mappedBy="survey", orphanRemoval=true, cascade={"remove", "persist"})
     */
    private $links;

    /**
     * @ORM\OneToOne(targetEntity="FocusGroup", mappedBy="survey", orphanRemoval=true, cascade={"remove", "persist"})
     */
    private $focusGroup;

    /*
     * Constructor
     */
    public function __construct()
    {
        $this->links = new ArrayCollection();
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
     * Set idSurvey
     *
     * @param integer $idSurvey
     *
     * @return \App\Entity\Survey
     */
    public function setIdSurvey($idSurvey)
    {
        $this->idSurvey = $idSurvey;

        return $this;
    }

    /**
     * Get idSurvey
     *
     * @return int
     */
    public function getIdSurvey()
    {
        return $this->idSurvey;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Survey
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
     * Set type
     *
     * @param integer $type
     *
     * @return Survey
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get type formatted
     *
     * @return string
     */
    public function getTypeFormatted()
    {
        $association = array(
            self::ENQUETE           => 'Enquête',
            self::PRE_RECRUTEMENT   => 'Pré-recrutement',
            self::TEST              => 'Test'
        );

        return isset($association[$this->getType()]) ? $association[$this->getType()] : '-';
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Survey
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set category
     *
     * @param Category $category
     *
     * @return Survey
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set panelisteGroup
     *
     * @param PanelisteGroup $panelisteGroup
     *
     * @return Survey
     */
    public function setPanelisteGroup(PanelisteGroup $panelisteGroup = null)
    {
        $this->panelisteGroup = $panelisteGroup;

        return $this;
    }

    /**
     * Get panelisteGroup
     *
     * @return PanelisteGroup
     */
    public function getPanelisteGroup()
    {
        return $this->panelisteGroup;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Survey
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get status formatted
     *
     * @return string
     */
    public function getStatusFormatted()
    {
        $association = array(
            self::A_VENIR       => 'upcoming',
            self::EN_COURS      => 'inprogress',
            self::FOCUS_GROUP   => 'Focus group',
            self::CLOTURE       => 'closed'
        );

        return isset($association[$this->getStatus()]) ? $association[$this->getStatus()] : '-';
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Survey
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
    public function isVisible()
    {
        return $this->visible;
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
     * Add link
     *
     * @param Link $link
     *
     * @return Survey
     */
    public function addLink(Link $link)
    {
        $link->setSurvey($this);
        $this->links[] = $link;

        return $this;
    }

    /**
     * Remove link
     *
     * @param Link $link
     */
    public function removeLink(Link $link)
    {
        $link->setSurvey(null);
        $this->links->removeElement($link);
    }

    /**
     * Get links
     *
     * @return ArrayCollection | Link[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set focusGroup
     *
     * @param FocusGroup $focusGroup
     *
     * @return Survey
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

    /**
     * @return string
     */
    public function getExternalType()
    {
        return $this->externalType;
    }

    /**
     * @param string $externalType
     */
    public function setExternalType($externalType)
    {
        $this->externalType = $externalType;
    }




    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageName", size="imageSize")
     *
     * @var File|null
     */
    private $imageFile;


    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string
     */
    private $imageName;


    /**
     *
     * @var int|null
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;






    /**
     * @ORM\PrePersist
     *
     * @return void
     * @throws Exception
     */
    public function setCreatedAtValue() {
        $date = new \DateTime();
        $this->updatedAt =$date;
    }



    /**
     * @param File|UploadedFile|null $imageFile
     * @throws Exception
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }


    public function setImageName(?string $image)
    {
        $this->imageName = $image;

        return $this;
    }


    /**
     * @return int|null
     */
    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    /**
     * @param int|null $imageSize
     */
    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }



}
