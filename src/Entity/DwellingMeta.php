<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DwellingMetaRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DwellingMetaRepository::class)]
class DwellingMeta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Dwelling::class, inversedBy: 'dwellingMetas')]
    private $dwelling;

    #[ORM\Column(type: 'string', length: 150)]
    #[Assert\Length(max: 150)]
    #[Assert\NotBlank()]
    private $field;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank()]
    private $value;

    public function getId(): ?int
    {
        return $this->id;
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
