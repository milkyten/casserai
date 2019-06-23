<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Kamer")
     */
    private $KamerId;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $imagefile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerId(): ?Kamer
    {
        return $this->KamerId;
    }

    public function setKamerId(?Kamer $KamerId): self
    {
        $this->KamerId = $KamerId;

        return $this;
    }

    public function getImagefile(): ?string
    {
        return $this->imagefile;
    }

    public function setImagefile(?string $imagefile): self
    {
        $this->imagefile = $imagefile;

        return $this;
    }
}
