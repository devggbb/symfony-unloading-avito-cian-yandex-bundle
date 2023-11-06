<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml;

class CianSource extends AbstractXmlSource
{
    static function getSource(): string
    {
        return 'cian';
    }

    public function getItem(): mixed
    {
        return 'Tesat';
    }

    public function wrapper(array $items): mixed
    {
        // TODO: Implement wrapper() method.
    }
}