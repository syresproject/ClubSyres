<?php

namespace App\Entity;

use App\Entity\FocusMessage;
use App\Entity\Survey;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="focus_groups")
 * @ORM\Entity(repositoryClass="App\Repository\FocusGroupRepository")
 */
class FocusGroup
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
     * @ORM\Column(name="article", type="text", nullable=true)
     */
    private $article;

    /**
     * @ORM\OneToOne(targetEntity="Survey", inversedBy="focusGroup")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;

    /**
     * @ORM\OneToMany(targetEntity="FocusMessage", mappedBy="focusGroup")
     */
    private $focusMessages;

    /**
     * @ORM\OneToMany(targetEntity="FocusAccess", mappedBy="focusGroup")
     */
    private $focusAccesses;

    /*
     * Constructor
     */
    public function __construct()
    {
        $this->focusMessages = new ArrayCollection();
        $this->focusAccesses = new ArrayCollection();
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
     * Set article
     *
     * @param string $article
     *
     * @return FocusGroup
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set survey
     *
     * @param Survey $survey
     *
     * @return FocusGroup
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
     * Add focusMessage
     *
     * @param FocusMessage $focusMessage
     *
     * @return FocusGroup
     */
    public function addFocusMessage(FocusMessage $focusMessage)
    {
        $this->focusMessages[] = $focusMessage;

        return $this;
    }

    /**
     * Remove focusMessage
     *
     * @param FocusMessage $focusMessage
     */
    public function removeFocusMessage(FocusMessage $focusMessage)
    {
        $this->focusMessages->removeElement($focusMessage);
    }

    /**
     * Get focusMessages
     *
     * @return ArrayCollection | FocusMessage[]
     */
    public function getFocusMessages()
    {
        return $this->focusMessages;
    }

    /**
     * Add focusAccess
     *
     * @param FocusAccess $focusAccess
     *
     * @return FocusGroup
     */
    public function addFocusAccess(FocusAccess $focusAccess)
    {
        $this->focusAccesses[] = $focusAccess;

        return $this;
    }

    /**
     * Remove focusAccess
     *
     * @param FocusAccess $focusAccess
     */
    public function removeFocusAccess(FocusAccess $focusAccess)
    {
        $this->focusAccesses->removeElement($focusAccess);
    }

    /**
     * Get focusAccesses
     *
     * @return Collection
     */
    public function getFocusAccesses()
    {
        return $this->focusAccesses;
    }
}
