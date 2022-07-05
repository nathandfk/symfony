<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserMetaRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserMetaRepository::class)]
#[ApiResource]
class UserMeta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private $id;

    #[ORM\ManyToOne(targetEntity: users::class, inversedBy: 'userMetas')]
    private $user;

    #[ORM\Column(type: 'string', length: 150)]
    #[Assert\Length(max: 150)]
    #[Assert\NotBlank()]
    private $field;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank()]
    private $value;

    public function __construct()
    {
        $this->field = "_host_iban";
        $this->value = "FR76 1234 5678 9012 3456 7890";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?users
    {
        return $this->user;
    }

    public function setUser(?users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getField(): ?string
    {
        return $this->field;
    }

    public function setField(string $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
