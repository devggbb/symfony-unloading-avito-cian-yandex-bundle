<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Service;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface\UploadingInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface\UploadingXmlNormalizerInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\XmlSourceInterface;

interface UploadingServiceInterface
{
    public function prepareAddObject(UploadingInterface $uploading, XmlSourceInterface $source): UploadingInterface;
    public function addObject(UploadingXmlNormalizerInterface $object, XmlSourceInterface $source): UploadingInterface;
    public function removeObject(UploadingXmlNormalizerInterface $object, XmlSourceInterface $source): UploadingInterface;
    public function generateXML(array $object, XmlSourceInterface $source): string;
}