<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[UniqueEntity("email", message: "L'utilisateur existe déjà")]
#[ApiResource]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\Length(max: 100)]
    #[Assert\NotBlank()]
    #[Assert\Regex("/^[a-zA-Z]{2,100}$/")]
    private $firstName;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\Length(max: 50)]
    #[Assert\NotBlank()]
    #[Assert\Regex("/^[a-zA-Z]{2,50}$/")]
    private $lastName;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    #[Assert\Length(max: 50)]
    private $society;

    #[ORM\Column(type: 'date', nullable: true)]
    private $birthday;

    #[ORM\Column(type: 'string', length: 150, unique: true)]
    #[Assert\Length(max: 150)]
    #[Assert\NotBlank()]
    #[Assert\Email()]
    #[Assert\Regex("/^[A-Za-z0-9]+@([A-Za-z0-9]+\.)+[A-Za-z]{2,4}$/")]
    private $email;

    #[ORM\Column(type: 'string', length: 25, nullable: true)]
    #[Assert\Length(max: 25)]
    #[Assert\Regex("/^[0-9\-\(\)\/\+\s]*$/")]
    private $phoneNumber;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string', length: 150)]
    #[Assert\Length(max: 150)]
    #[Assert\NotBlank()]
    private $address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private $complAddress;

    #[ORM\Column(type: 'string', length: 75)]
    #[Assert\Length(max: 75)]
    #[Assert\NotBlank()]
    private $city;

    #[ORM\Column(type: 'integer')]
    private $country;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(max: 255)]
    private $activationKey;

    #[ORM\Column(type: 'boolean')]
    private $statut;

    #[ORM\Column(type: 'string', length: 50)]
    private $host;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Regex("/^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/", message: "Votre mot de passe doit au moins contenir 10 caractères dont 1 lettre majuscule, 1 lettre minuscule, 1 caractère spacial et 1 chiffre")]
    private $password;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Assert\NotBlank()]
    private $addedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Assert\NotBlank()]
    private $updatedAt;


    #[ORM\OneToMany(mappedBy: 'user', targetEntity: UserMeta::class)]
    private $userMetas;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Dwelling::class)]
    private $dwellings;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Posts::class)]
    private $posts;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reservation::class)]
    private $reservations;

    #[ORM\OneToMany(mappedBy: 'sender', targetEntity: Message::class)]
    private $messages;

    #[ORM\Column(type: 'boolean')]
    private $account;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $deletedAt;




    public function __construct()
    {
        $this->userMetas = new ArrayCollection();
        $this->dwellings = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->reservations = new ArrayCollection();
        $this->roles = ["ROLE_USER"];
        $this->messages = new ArrayCollection();
        $this->statut = FALSE;
        $this->host = "PRIVATE";
        $this->account = TRUE;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return ucwords($this->firstName);
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return strtoupper($this->lastName);
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getSociety(): ?string
    {
        return $this->society;
    }

    public function setSociety(?string $society): self
    {
        $this->society = $society;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }
    
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = "ROLE_USER";

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }


    public function getCountry(): ?int
    {
        return $this->country;
    }

    public function setCountry(int $country): self
    {
        $this->country = $country;

        return $this;
    }


    public function getActivationKey(): ?string
    {
        return $this->activationKey;
    }

    public function setActivationKey(?string $activationKey): self
    {
        $this->activationKey = $activationKey;

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(?bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;

        return $this;
    }


    public function isAccount(): ?bool
    {
        return $this->account;
    }

    public function setAccount(bool $account): self
    {
        $this->account = $account;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeImmutable
    {
        return $this->addedAt;
    }

    public function setAddedAt(?\DateTimeImmutable $addedAt): self
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
    /**
     * @return Collection<int, UserMeta>
     */
    public function getUserMetas(): Collection
    {
        return $this->userMetas;
    }

    public function addUserMeta(UserMeta $userMeta): self
    {
        if (!$this->userMetas->contains($userMeta)) {
            $this->userMetas[] = $userMeta;
            $userMeta->setUser($this);
        }

        return $this;
    }

    public function removeUserMeta(UserMeta $userMeta): self
    {
        if ($this->userMetas->removeElement($userMeta)) {
            // set the owning side to null (unless already changed)
            if ($userMeta->getUser() === $this) {
                $userMeta->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Dwelling>
     */
    public function getDwellings(): Collection
    {
        return $this->dwellings;
    }

    public function addDwelling(Dwelling $dwelling): self
    {
        if (!$this->dwellings->contains($dwelling)) {
            $this->dwellings[] = $dwelling;
            $dwelling->setUser($this);
        }

        return $this;
    }

    public function removeDwelling(Dwelling $dwelling): self
    {
        if ($this->dwellings->removeElement($dwelling)) {
            // set the owning side to null (unless already changed)
            if ($dwelling->getUser() === $this) {
                $dwelling->setUser(null);
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
            $post->setUser($this);
        }

        return $this;
    }

    public function removePost(Posts $post): self
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getUser() === $this) {
                $post->setUser(null);
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
            $reservation->setUser($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getUser() === $this) {
                $reservation->setUser(null);
            }
        }

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setSender($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getSender() === $this) {
                $message->setSender(null);
            }
        }

        return $this;
    }


}
