<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity;


use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface\UploadingInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Type\StatusType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\MappedSuperclass]
abstract class AbstractUploading implements UploadingInterface
{
    #[ORM\Column(length: 255)]
    #[Assert\Choice(choices: StatusType::NAME)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $source = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): static
    {
        $this->source = $source;

        return $this;
    }
}