<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'messages')]
    private $sender;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'messages')]
    private $recipient;

    #[ORM\Column(type: 'text')]
    private $message;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $senderDeleteMsg;

    #[ORM\Column(type: 'boolean')]
    private $recipientDeleteMsg;

    #[ORM\Column(type: 'datetime_immutable')]
    private $addedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?Users
    {
        return $this->sender;
    }

    public function setSender(?Users $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getRecipient(): ?Users
    {
        return $this->recipient;
    }

    public function setRecipient(?Users $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function isSenderDeleteMsg(): ?bool
    {
        return $this->senderDeleteMsg;
    }

    public function setSenderDeleteMsg(?bool $senderDeleteMsg): self
    {
        $this->senderDeleteMsg = $senderDeleteMsg;

        return $this;
    }

    public function isRecipientDeleteMsg(): ?bool
    {
        return $this->recipientDeleteMsg;
    }

    public function setRecipientDeleteMsg(bool $recipientDeleteMsg): self
    {
        $this->recipientDeleteMsg = $recipientDeleteMsg;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeImmutable
    {
        return $this->addedAt;
    }

    public function setAddedAt(\DateTimeImmutable $addedAt): self
    {
        $this->addedAt = $addedAt;

        return $this;
    }
}
