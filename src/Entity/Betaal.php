<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BetaalRepository")
 */
class Betaal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $soort;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $creditcardNr;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $betaaldatum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getSoort(): ?string
    {
        return $this->soort;
    }

    public function setSoort(?string $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    public function getCreditcardNr(): ?string
    {
        return $this->creditcardNr;
    }

    public function setCreditcardNr(?string $creditcardNr): self
    {
        $this->creditcardNr = $creditcardNr;

        return $this;
    }

    public function getBetaaldatum(): ?\DateTimeInterface
    {
        return $this->betaaldatum;
    }

    public function setBetaaldatum(?\DateTimeInterface $betaaldatum): self
    {
        $this->betaaldatum = $betaaldatum;

        return $this;
    }
}
