<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KamerRepository")
 */
class Kamer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Soort")
     * @ORM\JoinColumn(nullable=false)
     */
    private $SoortId;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSoortId(): ?Soort
    {
        return $this->SoortId;
    }

    public function setSoortId(?Soort $SoortId): self
    {
        $this->SoortId = $SoortId;

        return $this;
    }

    public function getPrijs(): ?string
    {
        return $this->prijs;
    }

    public function setPrijs(?string $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }
}
