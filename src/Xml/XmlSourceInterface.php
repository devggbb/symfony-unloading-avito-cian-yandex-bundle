<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\UploadingXmlNormalizer;

interface XmlSourceInterface
{
    static function getSource(): string;

    public function nodeGenerate(UploadingXmlNormalizer $normalizer, array $objects): mixed;

    public function getNodeName(): string;
    public function getItem(): mixed;

    public function wrapper(array $items): mixed;
}