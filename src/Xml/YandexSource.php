<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml;


use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Offer;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\RealtyFeed;

class YandexSource extends AbstractXmlSource
{
    static function getSource(): string
    {
        return 'yandex';
    }

    public function getNodeName(): string
    {
        return 'realty-feed';
    }
    public function getItem(): mixed
    {
        return new Offer();
    }

    public function wrapper(array $items): mixed
    {
        $realtyFeed = new RealtyFeed();
        $realtyFeed->offer = $items;

        return $realtyFeed;
    }
}