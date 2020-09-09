<?php

namespace App\Entity;

use App\Repository\InvitationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Tests\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=InvitationRepository::class)
 */
class Invitation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * /
    private $invitaionPar;
     */


    /**
     * @ORM\Column(type="string", length=150)
     */
    private $mail;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }



    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     * /
    private $content;
     */




}
