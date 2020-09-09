<?php

namespace App\Entity;

use App\Entity\Survey;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\OneToMany(targetEntity="Survey", mappedBy="category")
     */
    private $surveys;


    public function __construct()
    {
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
     * @return \AppBundle\Entity\Category
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
     * Add survey
     *
     * @param Survey $survey
     *
     * @return Category
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
