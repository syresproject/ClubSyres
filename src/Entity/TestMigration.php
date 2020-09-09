<?php

namespace App\Entity;

use App\Repository\TestMigrationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestMigrationRepository::class)
 */
class TestMigration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $albert;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAlbert(): ?string
    {
        return $this->albert;
    }

    public function setAlbert(string $albert): self
    {
        $this->albert = $albert;

        return $this;
    }
}
