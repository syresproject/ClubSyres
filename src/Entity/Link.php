<?php

namespace App\Entity;

use App\Entity\LinkLog;
use App\Entity\Survey;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Table(name="link")
 * @ORM\Entity(repositoryClass="App\Repository\LinkRepository")
 */
class Link
{
    const OTHER = 0;
    const TEST_FINAL = 1;
    const EMOTION = 2;
    const TENUS = 3;

    /**
     * @var int
     * oui ls kes record on db est cree manuelemnt avec vous pas avec doctrine si  regarde
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_lien", type="integer")
     */
    private $numeroLien;

    /**
     * @return int
     */
    public function getNumeroLien()
    {
        return $this->numeroLien;
    }

    /**
     * @param int $numeroLien
     */
    public function setNumeroLien(int $numeroLien)
    {
        $this->numeroLien = $numeroLien;
    }





    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=191)
     */
    private $link;


    /**
     * @var date $dateUn
     *a
     * @ORM\Column(name="date_un", type="datetime", nullable=true)
     */
    private $dateUn;


    /**
     * @return mixed
     */
    public function getDateUn()
    {
        return $this->dateUn;
    }

    /**
     * @param mixed $dateUn
     */
    public function setDateUn($dateUn)
    {
        $this->dateUn = $dateUn;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=191, unique=true)
     */
    private $token;

    /**
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="links")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;

    /**
     * @ORM\OneToMany(targetEntity="LinkLog", mappedBy="link", orphanRemoval=true, cascade={"remove", "persist"})
     */
    private $linkLogs;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="smallint")
     */
    private $type;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->linkLogs = new ArrayCollection();
        $this->setToken(md5(uniqid(rand(), true)));
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
     * @return \App\Entity\Link
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
//
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
     * Set link
     *
     * @param string $link
     *
     * @return Link
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Link
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set survey
     *
     * @param Survey $survey
     *
     * @return Link
     */
    public function setSurvey(Survey $survey = null)
    {
        $this->survey = $survey;

        return $this;
    }

    /**
     * Get survey
     *
     * @return Survey
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Link
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add linkLog
     *
     * @param LinkLog $linkLog
     *
     * @return Link
     */
    public function addLinkLog(LinkLog $linkLog)
    {
        $this->linkLogs[] = $linkLog;

        return $this;
    }

    /**
     * Remove linkLog
     *
     * @param LinkLog $linkLog
     */
    public function removeLinkLog(LinkLog $linkLog)
    {
        $this->linkLogs->removeElement($linkLog);
    }

    /**
     * Get linkLogs
     *
     * @return ArrayCollection | LinkLog[]
     */
    public function getLinkLogs()
    {
        return $this->linkLogs;
    }
}
