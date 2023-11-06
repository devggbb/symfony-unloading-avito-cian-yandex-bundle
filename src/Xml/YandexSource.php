<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml;

class YandexSource extends AbstractXmlSource
{
    static function getSource(): string
    {
        return 'yandex';
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