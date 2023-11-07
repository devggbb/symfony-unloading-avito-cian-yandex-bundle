<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\Interface;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\AbstractObject;

interface CianNormalizerInterface
{
    public function normalize(mixed $object, AbstractObject $tag): AbstractObject;
}