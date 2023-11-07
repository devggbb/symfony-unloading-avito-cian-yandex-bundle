<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Area;

use Symfony\Component\Validator\Constraints as Assert;

class Area
{
    const UNIT_SQ_M = 'кв. м';
    const UNIT_WEAVING = 'сотка';
    const UNIT_HECTARE = 'гектар';

    #[Assert\NotBlank]
    public ?int $value;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::UNIT_SQ_M,
        self::UNIT_WEAVING,
        self::UNIT_HECTARE,
    ])]
    public ?string $unit;

}