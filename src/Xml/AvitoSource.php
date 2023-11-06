<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad\Ad;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ads;

class AvitoSource extends AbstractXmlSource
{
    static function getSource(): string
    {
        return 'avito';
    }

    public function getItem(): mixed
    {
        return new Ad();
    }

    public function wrapper(array $items): mixed
    {
        $ads = new Ads();
        $ads->Ad = $items;
        return $ads;
    }
}