<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Feed;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\OfficeRent;

class CianSource extends AbstractXmlSource
{
    static function getSource(): string
    {
        return 'cian';
    }

    public function getNodeName(): string
    {
        return 'feed';
    }

    public function getItem(): mixed
    {
        return new OfficeRent();
    }

    public function wrapper(array $items): mixed
    {
        $feed = new Feed();
        $feed->object = $items;

        return $feed;
    }
}