<?php

namespace App\Entity;

use App\Repository\DeoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeoRepository::class)
 */
class Deo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $utilisateur_deo;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $sels_alu;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $pierre_alun;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $forme_deo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurDeo(): ?string
    {
        return $this->utilisateur_deo;
    }

    public function setUtilisateurDeo(string $utilisateur_deo): self
    {
        $this->utilisateur_deo = $utilisateur_deo;

        return $this;
    }

    public function getSelsAlu(): ?string
    {
        return $this->sels_alu;
    }

    public function setSelsAlu(?string $sels_alu): self
    {
        $this->sels_alu = $sels_alu;

        return $this;
    }

    public function getPierreAlun(): ?string
    {
        return $this->pierre_alun;
    }

    public function setPierreAlun(?string $pierre_alun): self
    {
        $this->pierre_alun = $pierre_alun;

        return $this;
    }

    public function getFormeDeo(): ?string
    {
        return $this->forme_deo;
    }

    public function setFormeDeo(?string $forme_deo): self
    {
        $this->forme_deo = $forme_deo;

        return $this;
    }
}