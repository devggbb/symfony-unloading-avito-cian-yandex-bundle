<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Type;

class StatusType
{
    public const PUBLISHED = 'Published';
    public const OFF = 'Off';

    public const NAME = [
        self::PUBLISHED,
        self::OFF,
    ];
}