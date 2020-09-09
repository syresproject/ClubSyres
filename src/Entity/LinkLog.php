<?php

namespace App\Entity;

use App\Entity\Link;
use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
/*
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;
*/
/**
 * @ORM\Entity(repositoryClass="App\Repository\LinkLogRepository")
 */
class LinkLog
{
    const ACCESS = 0;
    const REPLY = 1;

    /**
    use TimestampableEntity;
     * */

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
     * @ORM\Column(name="url", type="string", length=191)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="Link", inversedBy="linkLogs")
     * @ORM\JoinColumn(name="link_id", referencedColumnName="id")
     */
    private $link;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="smallint")
     */
    private $type;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $horodateur;


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
     * Set url
     *
     * @param string $url
     *
     * @return \App\Entity\LinkLog
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set link
     *
     * @param Link $link
     *
     * @return LinkLog
     */
    public function setLink(Link $link = null)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return LinkLog
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
     * Set type
     *
     * @param integer $type
     *
     * @return LinkLog
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
     * @return \DateTime
     */
    public function getHorodateur()
    {
        return $this->horodateur;
    }

    /**
     * @param \DateTime $horodateur
     */
    public function setHorodateur($horodateur)
    {
        $this->horodateur = $horodateur;
    }
}
