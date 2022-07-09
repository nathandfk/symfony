<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ApiResource]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'reservations')]
    private $user;

    #[ORM\ManyToOne(targetEntity: Dwelling::class, inversedBy: 'reservations')]
    private $dwelling;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\Length(max: 50)]
    #[Assert\NotBlank()]
    private $statut;

    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank()]
    #[Assert\Regex("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/")]
    private $startDate;

    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank()]
    #[Assert\Regex("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/")]
    private $endDate;

    #[ORM\Column(type: 'datetime_immutable')]
    private $reservedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updatedAt;

    #[ORM\OneToMany(mappedBy: 'reservation', targetEntity: ReservationMeta::class)]
    private $reservationMetas;

    public function __construct()
    {
        $this->reservationMetas = new ArrayCollection();
        $this->reservedAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
        $this->updatedAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDwelling(): ?Dwelling
    {
        return $this->dwelling;
    }

    public function setDwelling(?Dwelling $dwelling): self
    {
        $this->dwelling = $dwelling;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getReservedAt(): ?\DateTimeInterface
    {
        return $this->reservedAt;
    }

    public function setReservedAt(\DateTimeInterface $reservedAt): self
    {
        $this->reservedAt = $reservedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection<int, ReservationMeta>
     */
    public function getReservationMetas(): Collection
    {
        return $this->reservationMetas;
    }

    public function addReservationMeta(ReservationMeta $reservationMeta): self
    {
        if (!$this->reservationMetas->contains($reservationMeta)) {
            $this->reservationMetas[] = $reservationMeta;
            $reservationMeta->setReservation($this);
        }

        return $this;
    }

    public function removeReservationMeta(ReservationMeta $reservationMeta): self
    {
        if ($this->reservationMetas->removeElement($reservationMeta)) {
            // set the owning side to null (unless already changed)
            if ($reservationMeta->getReservation() === $this) {
                $reservationMeta->setReservation(null);
            }
        }

        return $this;
    }
}
