<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity(repositoryClass="App\Repository\ConfigurationRepository")
 */
class Configuration
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
     * @ORM\Column(name="facebook", type="string", length=191, unique=true)
     */
    private $facebook;

      /**
     * @var string
     *
     * @ORM\Column(name="insta", type="string", length=191, nullable=true)
     */
    private $insta;


    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=191, nullable=true)
     */
    private $site;


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
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param string $facebook
     */
    public function setFacebook(string $facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return string
     */
    public function getInsta()
    {
        return $this->insta;
    }

    /**
     * @param string $insta
     */
    public function setInsta(string $insta)
    {
        $this->insta = $insta;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param string $site
     */
    public function setSite(string $site)
    {
        $this->site = $site;
    }



}

