<?php

namespace App\Entity;

use App\Repository\FormTroisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormTroisRepository::class)
 */
class FormTrois
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=191)
     */
    private $loisir;

    /**
     * @ORM\OneToOne(targetEntity=Insc::class, cascade={"persist", "remove"})
     */
    private $idInsc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoisir(): ?string
    {
        return $this->loisir;
    }

    public function setLoisir(string $loisir): self
    {
        $this->loisir = $loisir;

        return $this;
    }

    public function getIdInsc(): ?Insc
    {
        return $this->idInsc;
    }

    public function setIdInsc(?Insc $idInsc): self
    {
        $this->idInsc = $idInsc;

        return $this;
    }
}
