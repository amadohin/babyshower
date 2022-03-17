<?php

namespace App\Entity;

use App\Repository\GuestsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: GuestsRepository::class)]
#[ORM\HasLifecycleCallbacks()]
class Guests
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    private $link;

    #[ORM\Column(type: 'string', length: 50)]
    private $uuid;

    #[ORM\Column(type: 'string', length: 255)]
    private $firstname;

    #[ORM\Column(type: 'string', length: 255)]
    private $lastname;

    #[ORM\Column(type: 'boolean')]
    private $isconfirmed;

    #[ORM\Column(type: 'boolean')]
    private $isactive;

    #[ORM\Column(type: 'datetime')]
    private $updatedat;

    #[ORM\Column(type: 'datetime')]
    private $createdat;

    public function __construct() {
        $this->updatedat = new \DateTime();
        $this->isactive = true;
        $this->createdat = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return 'http://mybabyshowerregina.ddns.net/' . $this->uuid;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    #[ORM\PrePersist]
    public function setUuid(): void
    {
        $this->uuid = Uuid::v4();
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getIsconfirmed(): ?bool
    {
        return $this->isconfirmed;
    }

    public function setIsconfirmed(bool $isconfirmed): self
    {
        $this->isconfirmed = $isconfirmed;

        return $this;
    }

    public function getIsactive(): ?bool
    {
        return $this->isactive;
    }

    public function setIsactive(bool $isactive): self
    {
        $this->isactive = $isactive;

        return $this;
    }

    public function getUpdatedat(): ?\DateTimeInterface
    {
        return $this->updatedat;
    }

    public function setUpdatedat(\DateTimeInterface $updatedat): self
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }

}
