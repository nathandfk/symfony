<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DwellingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DwellingRepository::class)]
#[ApiResource]
class Dwelling
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'dwellings')]
    private $user;

    #[ORM\Column(type: 'json')]
    #[Assert\NotBlank()]
    private $pictures = [];

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\Length(max: 100)]
    #[Assert\NotBlank()]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(max: 255)]
    #[Assert\NotBlank()]
    private $abstract;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank()]
    private $description;

    #[ORM\Column(type: 'float')]
    #[Assert\NotBlank()]
    #[Assert\Regex('/^[0-9\.]{2,}$/')]
    private $price;

    #[ORM\Column(type: 'string', length: 150)]
    #[Assert\Length(max: 150)]
    #[Assert\NotBlank()]
    private $address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private $complAddress;

    #[ORM\Column(type: 'string', length: 255)]
    private $city;

    #[ORM\Column(type: 'string', length: 255)]
    private $state;

    #[ORM\Column(type: 'integer')]
    private $country;

    #[ORM\Column(type: 'float')]
    private $longitude;

    #[ORM\Column(type: 'float')]
    private $latitude;

    #[ORM\Column(type: 'datetime_immutable')]
    private $addedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updatedAt;

    #[ORM\OneToMany(mappedBy: 'dwelling', targetEntity: DwellingMeta::class)]
    private $dwellingMetas;

    #[ORM\OneToMany(mappedBy: 'dwelling', targetEntity: Posts::class)]
    private $posts;

    #[ORM\OneToMany(mappedBy: 'dwelling', targetEntity: Reservation::class)]
    private $reservations;


    public function __construct()
    {
        $this->dwellingMetas = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->reservations = new ArrayCollection();
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

    public function getPictures(): ?array
    {
        return $this->pictures;
    }

    public function setPictures(array $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): self
    {
        $this->abstract = $abstract;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getComplAddress(): ?string
    {
        return $this->complAddress;
    }

    public function setComplAddress(?string $complAddress): self
    {
        $this->complAddress = $complAddress;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCountry(): ?int
    {
        return $this->country;
    }

    public function setCountry(?int $country): self
    {
        $this->country = $country;

        return $this;
    }


    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }


    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->addedAt;
    }

    public function setAddedAt(?\DateTimeInterface $addedAt): self
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection<int, DwellingMeta>
     */
    public function getDwellingMetas(): Collection
    {
        return $this->dwellingMetas;
    }

    public function addDwellingMeta(DwellingMeta $dwellingMeta): self
    {
        if (!$this->dwellingMetas->contains($dwellingMeta)) {
            $this->dwellingMetas[] = $dwellingMeta;
            $dwellingMeta->setDwelling($this);
        }

        return $this;
    }

    public function removeDwellingMeta(DwellingMeta $dwellingMeta): self
    {
        if ($this->dwellingMetas->removeElement($dwellingMeta)) {
            // set the owning side to null (unless already changed)
            if ($dwellingMeta->getDwelling() === $this) {
                $dwellingMeta->setDwelling(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Posts>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Posts $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts[] = $post;
            $post->setDwelling($this);
        }

        return $this;
    }

    public function removePost(Posts $post): self
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getDwelling() === $this) {
                $post->setDwelling(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setDwelling($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getDwelling() === $this) {
                $reservation->setDwelling(null);
            }
        }

        return $this;
    }


}
