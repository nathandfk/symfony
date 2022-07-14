<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PostsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PostsRepository::class)]
#[ApiResource]
class Posts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'posts')]
    private $user;

    #[ORM\ManyToOne(targetEntity: Dwelling::class, inversedBy: 'posts')]
    private $dwelling;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\Length(max: 50)]
    #[Assert\NotBlank()]
    private $type;

    #[ORM\Column(type: 'string', length: 150)]
    #[Assert\Length(max: 150)]
    #[Assert\NotBlank()]
    private $title;

    #[ORM\Column(type: 'string', length: 150, nullable: true)]
    #[Assert\Length(max: 150)]
    private $abstract;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\Length(max: 50)]
    #[Assert\NotBlank()]
    private $statut;

    #[ORM\Column(type: 'string', length: 25, nullable: true)]
    #[Assert\Length(max: 25)]
    private $number;

    #[ORM\Column(type: 'text', nullable: true)]
    private $picture;

    #[ORM\Column(type: 'datetime_immutable')]
    private $addedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updatedAt;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: PostMeta::class)]
    private $postMetas;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: Dwelling::class)]
    private $dwellings;

    public function __construct()
    {
        $this->postMetas = new ArrayCollection();
        $this->addedAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
        $this->updatedAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
        $this->dwellings = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->addedAt;
    }

    public function setAddedAt(\DateTimeInterface $addedAt): self
    {
        $this->addedAt = $addedAt;

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
     * @return Collection<int, PostMeta>
     */
    public function getPostMetas(): Collection
    {
        return $this->postMetas;
    }

    public function addPostMeta(PostMeta $postMeta): self
    {
        if (!$this->postMetas->contains($postMeta)) {
            $this->postMetas[] = $postMeta;
            $postMeta->setPost($this);
        }

        return $this;
    }

    public function removePostMeta(PostMeta $postMeta): self
    {
        if ($this->postMetas->removeElement($postMeta)) {
            // set the owning side to null (unless already changed)
            if ($postMeta->getPost() === $this) {
                $postMeta->setPost(null);
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
            $dwelling->setType($this);
        }

        return $this;
    }

    public function removeDwelling(Dwelling $dwelling): self
    {
        if ($this->dwellings->removeElement($dwelling)) {
            // set the owning side to null (unless already changed)
            if ($dwelling->getType() === $this) {
                $dwelling->setType(null);
            }
        }

        return $this;
    }
}
