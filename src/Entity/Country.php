<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
#[ApiResource]
class Country
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $code;

    #[ORM\Column(type: 'string', length: 2)]
    #[Assert\Length(max: 2)]
    #[Assert\NotBlank()]
    private $alpha2;

    #[ORM\Column(type: 'string', length: 3)]
    #[Assert\Length(max: 3)]
    #[Assert\NotBlank()]
    private $alpha3;

    #[ORM\Column(type: 'string', length: 75)]
    #[Assert\Length(max: 75)]
    #[Assert\NotBlank()]
    private $nameEnGb;

    #[ORM\Column(type: 'string', length: 75)]
    #[Assert\Length(max: 75)]
    #[Assert\NotBlank()]
    private $nameFr;

    #[ORM\Column(type: 'boolean')]
    private $europe;

    #[ORM\OneToMany(mappedBy: 'country', targetEntity: Dwelling::class)]
    private $dwellings;

    #[ORM\OneToMany(mappedBy: 'country', targetEntity: Users::class)]
    private $users;

    public function __construct()
    {
        $this->dwellings = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getAlpha2(): ?string
    {
        return $this->alpha2;
    }

    public function setAlpha2(string $alpha2): self
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    public function getAlpha3(): ?string
    {
        return $this->alpha3;
    }

    public function setAlpha3(string $alpha3): self
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    public function getNameEnGb(): ?string
    {
        return $this->nameEnGb;
    }

    public function setNomEnGb(string $nameEnGb): self
    {
        $this->nameEnGb = $nameEnGb;

        return $this;
    }

    public function getNameFr(): ?string
    {
        return $this->nameFr;
    }

    public function setNameFr(string $nameFr): self
    {
        $this->nameFr = $nameFr;

        return $this;
    }

    public function getEurope(): ?bool
    {
        return $this->europe;
    }

    public function setEurope(bool $europe): self
    {
        $this->europe = $europe;

        return $this;
    }

    // /**
    //  * @return Collection<int, Dwelling>
    //  */
    // public function getDwellings(): Collection
    // {
    //     return $this->dwellings;
    // }

    // public function addDwelling(Dwelling $dwelling): self
    // {
    //     if (!$this->dwellings->contains($dwelling)) {
    //         $this->dwellings[] = $dwelling;
    //         $dwelling->setCountry($this);
    //     }

    //     return $this;
    // }

    // public function removeDwelling(Dwelling $dwelling): self
    // {
    //     if ($this->dwellings->removeElement($dwelling)) {
    //         // set the owning side to null (unless already changed)
    //         if ($dwelling->getCountry() === $this) {
    //             $dwelling->setCountry(null);
    //         }
    //     }

    //     return $this;
    // }



    // /**
    //  * @return Collection<int, Users>
    //  */
    // public function getUsers(): Collection
    // {
    //     return $this->users;
    // }

    // public function addUser(Users $user): self
    // {
    //     if (!$this->users->contains($user)) {
    //         $this->users[] = $user;
    //         $user->setCountry($this);
    //     }

    //     return $this;
    // }

    // public function removeUser(Users $user): self
    // {
    //     if ($this->users->removeElement($user)) {
    //         // set the owning side to null (unless already changed)
    //         if ($user->getCountry() === $this) {
    //             $user->setCountry(null);
    //         }
    //     }

    //     return $this;
    // }

}
