<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface;

interface UploadingInterface
{
    public function getStatus(): ?string;
    public function setStatus(string $status): static;
    public function getSource(): ?string;
    public function setSource(string $source): static;
    public function getObject(): UploadingXmlNormalizerInterface;
    public function setObject(UploadingXmlNormalizerInterface $object): static;
}