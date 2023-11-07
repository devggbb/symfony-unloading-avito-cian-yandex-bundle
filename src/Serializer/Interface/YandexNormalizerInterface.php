<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\Interface;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Offer;

interface YandexNormalizerInterface
{
    public function normalize(mixed $object, Offer $tag): Offer;
}