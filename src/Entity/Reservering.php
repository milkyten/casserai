<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReserveringRepository")
 */
class Reservering
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
    private $kamerId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $checkinDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $checkoutDate;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Betaal", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $betaalId;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $betaalMethode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerId(): ?Kamer
    {
        return $this->kamerId;
    }

    public function setKamerId(?Kamer $kamerId): self
    {
        $this->kamerId = $kamerId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCheckinDate(): ?\DateTimeInterface
    {
        return $this->checkinDate;
    }

    public function setCheckinDate(?\DateTimeInterface $checkinDate): self
    {
        $this->checkinDate = $checkinDate;

        return $this;
    }

    public function getCheckoutDate(): ?\DateTimeInterface
    {
        return $this->checkoutDate;
    }

    public function setCheckoutDate(?\DateTimeInterface $checkoutDate): self
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    public function getBetaalId(): ?Betaal
    {
        return $this->betaalId;
    }

    public function setBetaalId(Betaal $betaalId): self
    {
        $this->betaalId = $betaalId;

        return $this;
    }

    public function getBetaalMethode(): ?string
    {
        return $this->betaalMethode;
    }

    public function setBetaalMethode(?string $betaalMethode): self
    {
        $this->betaalMethode = $betaalMethode;

        return $this;
    }
}
