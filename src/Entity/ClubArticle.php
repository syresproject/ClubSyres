<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * ClubArticle
 *
 * @ORM\Table(name="club_article")
 * @ORM\Entity(repositoryClass="App\Repository\ClubArticleRepository")
 */
class ClubArticle
{
    //use TimestampableEntity;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Many Articles have One Item.
     * @ORM\ManyToOne(targetEntity="CategoryItem", inversedBy="articles")
     * @ORM\JoinColumn(name="clubitem_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=191)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="test_date", type="date")
     */
    private $testDate;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=191)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="location_brand", type="string", length=191)
     */
    private $locationBrand;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=191, nullable=true)
     */
    private $category = null;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="string", length=191)
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="ClubSubject", inversedBy="clubArticles")
     * @ORM\JoinColumn(name="club_subject_id", referencedColumnName="id")
     */
    private $clubSubject;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryHabit", inversedBy="clubArticles")
     * @ORM\JoinColumn(name="category_habit_id", referencedColumnName="id")
     */
    private $categoryHabit;

    /**
     * @ORM\ManyToOne(targetEntity="HeaderHabit", inversedBy="clubArticles")
     * @ORM\JoinColumn(name="header_habit_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $headerHabit;

    /**
     * @ORM\ManyToOne(targetEntity="Habit", inversedBy="clubArticles")
     * @ORM\JoinColumn(name="habit_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $habit;

    /**
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="clubArticles")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $brand;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="clubArticles")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @var int
     *
     * @ORM\Column(name="websearch", type="boolean")
     */
    private $websearch = false;

    /**
     * @var int
     *
     * @ORM\Column(name="plane", type="boolean")
     */
    private $plane = false;

    /**
     * @var int
     *
     * @ORM\Column(name="waiting_status", type="boolean")
     */
    private $waitingStatus = false;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=191, nullable=true)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="product_brand", type="string", length=191, nullable=true)
     */
    private $productBrand;

    /**
     * @var string
     *
     * @ORM\Column(name="suggestion", type="text", nullable=true)
     */
    private $suggestion;

    /**
     * @var int
     *
     * @ORM\Column(name="satisfaction", type="integer", nullable=true)
     */
    private $satisfaction = null;

    const SATISFACTION_FIELD = [
        'Mécontentement' => 0,
        'Satisfaction' => 1,
        'Satisfaction avec suggestion' => 2
    ];

    /**
     * @var int
     *
     * @ORM\Column(name="satisfaction_details", type="integer", nullable=true)
     */
    private $satisfactionDetails = null;

    const SATISFACTION_DETAILS_FIELD = [
        'Achat' => 0,
        'Conseil' => 1,
        'Conseil & Achat' => 2,
        'Service' => 3,
        'Surf web' => 4,
        'Autre' => 5
    ];

    /*
    * Constructor
    */
    public function __construct()
    {
        $this->visible = false;
    }


    public function __toString()
    {
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
     * @return ClubArticle
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
     * Set testDate
     *
     * @param \DateTime $testDate
     *
     * @return ClubArticle
     */
    public function setTestDate($testDate)
    {
        $this->testDate = $testDate;

        return $this;
    }

    /**
     * Get testDate
     *
     * @return \DateTime
     */
    public function getTestDate()
    {
        return $this->testDate;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return ClubArticle
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return ClubArticle
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set product
     *
     * @param string $product
     *
     * @return ClubArticle
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return ClubArticle
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return ClubArticle
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set clubSubject
     *
     * @param ClubSubject $clubSubject
     *
     * @return ClubArticle
     */
    public function setClubSubject(ClubSubject $clubSubject = null)
    {
        $this->clubSubject = $clubSubject;

        return $this;
    }

    /**
     * Get clubSubject
     *
     * @return ClubSubject
     */
    public function getClubSubject()
    {
        return $this->clubSubject;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return ClubArticle
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
     * Set visible
     *
     * @param boolean $visible
     *
     * @return ClubArticle
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

    /**
     * Set locationBrand
     *
     * @param string $locationBrand
     *
     * @return ClubArticle
     */
    public function setLocationBrand($locationBrand)
    {
        $this->locationBrand = $locationBrand;

        return $this;
    }

    /**
     * Get locationBrand
     *
     * @return string
     */
    public function getLocationBrand()
    {
        return $this->locationBrand;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return ClubArticle
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /*
     * Set item
     *
     * @param \App\Entity\CategoryItem $item
     *
     * @return ClubArticle
     */
    public function setItem(\App\Entity\CategoryItem $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productBrand
     *
     * @param string $productBrand
     *
     * @return ClubArticle
     */
    public function setProductBrand($productBrand)
    {
        $this->productBrand = $productBrand;

        return $this;
    }

    /**
     * Get productBrand
     *
     * @return string
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /*
     * Get item
     *
     * @return \App\Entity\CategoryItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set websearch
     *
     * @param boolean $websearch
     *
     * @return ClubArticle
     */
    public function setWebsearch($websearch)
    {
        $this->websearch = $websearch;

        return $this;
    }

    /**
     * Get websearch
     *
     * @return boolean
     */
    public function getWebsearch()
    {
        return $this->websearch;
    }

    /**
     * Set satisfaction
     *
     * @param integer $satisfaction
     *
     * @return ClubArticle
     */
    public function setSatisfaction($satisfaction)
    {
        $this->satisfaction = $satisfaction;

        return $this;
    }

    /**
     * Get satisfaction
     *
     * @return integer
     */
    public function getSatisfaction()
    {
        return $this->satisfaction;
    }

    /**
     * Set satisfactionDetails
     *
     * @param integer $satisfactionDetails
     *
     * @return ClubArticle
     */
    public function setSatisfactionDetails($satisfactionDetails)
    {
        $this->satisfactionDetails = $satisfactionDetails;

        return $this;
    }

    /**
     * Get satisfactionDetails
     *
     * @return integer
     */
    public function getSatisfactionDetails()
    {
        return $this->satisfactionDetails;
    }

    /**
     * Set plane
     *
     * @param boolean $plane
     *
     * @return ClubArticle
     */
    public function setPlane($plane)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return boolean
     */
    public function getPlane()
    {
        return $this->plane;
    }

    /**
     * Set categoryHabit
     *
     * @param \App\Entity\CategoryHabit $categoryHabit
     *
     * @return ClubArticle
     */
    public function setCategoryHabit(\App\Entity\CategoryHabit $categoryHabit = null)
    {
        $this->categoryHabit = $categoryHabit;

        return $this;
    }

    /**
     * Get categoryHabit
     *
     * @return \App\Entity\CategoryHabit
     */
    public function getCategoryHabit()
    {
        return $this->categoryHabit;
    }

    /**
     * Set headerHabit
     *
     * @param \App\Entity\HeaderHabit $headerHabit
     *
     * @return ClubArticle
     */
    public function setHeaderHabit(\App\Entity\HeaderHabit $headerHabit = null)
    {
        $this->headerHabit = $headerHabit;

        return $this;
    }

    /**
     * Get headerHabit
     *
     * @return \App\Entity\HeaderHabit
     */
    public function getHeaderHabit()
    {
        return $this->headerHabit;
    }

    /**
     * Set habit
     *
     * @param \App\Entity\Habit $habit
     *
     * @return ClubArticle
     */
    public function setHabit(\App\Entity\Habit $habit = null)
    {
        $this->habit = $habit;

        return $this;
    }

    /**
     * Get habit
     *
     * @return \App\Entity\Habit
     */
    public function getHabit()
    {
        return $this->habit;
    }

    /**
     * Set brand
     *
     * @param \App\Entity\Brand $brand
     *
     * @return null|ClubArticle
     */
    public function setBrand(\App\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \App\Entity\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set suggestion
     *
     * @param string $suggestion
     *
     * @return ClubArticle
     */
    public function setSuggestion($suggestion)
    {
        $this->suggestion = $suggestion;

        return $this;
    }

    /**
     * Get suggestion
     *
     * @return string
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * Set waitingStatus
     *
     * @param boolean $waitingStatus
     *
     * @return ClubArticle
     */
    public function setWaitingStatus($waitingStatus)
    {
        $this->waitingStatus = $waitingStatus;

        return $this;
    }

    /**
     * Get waitingStatus
     *
     * @return boolean
     */
    public function getWaitingStatus()
    {
        return $this->waitingStatus;
    }
}
