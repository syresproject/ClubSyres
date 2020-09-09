<?php

namespace App\Entity;

use App\Repository\PDeuxInsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PDeuxInsRepository::class)
 */
class PDeuxIns
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Insc::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idInsc;

    /**
     * @ORM\Column(type="string", length=191)
     */
    private $domaineM;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInsc(): ?Insc
    {
        return $this->idInsc;
    }

    public function setIdInsc(Insc $idInsc): self
    {
        $this->idInsc = $idInsc;

        return $this;
    }

    public function getDomaineM(): ?string
    {
        return $this->domaineM;
    }

    public function setDomaineM(string $domaineM): self
    {
        $this->domaineM = $domaineM;

        return $this;
    }
}
