<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\Interface;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad\Ad;

interface AvitoNormalizerInterface
{
    public function normalize(mixed $object, Ad $ad): Ad;
}