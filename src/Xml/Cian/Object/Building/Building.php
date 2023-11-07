<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Building;

use Symfony\Component\Validator\Constraints as Assert;

class Building
{
    const CONDITIONING_TYPE_CENTRAL = 'central';
    const CONDITIONING_TYPE_LOCAL = 'local';
    const CONDITIONING_TYPE_NO = 'no';

    public ?string $Name;
    #[Assert\NotBlank]
    public int $FloorsCount;
    public ?int $BuildYear;
    public ?float $TotalArea;
    public ?float $CeilingHeight;
    public ?string $Type;
    #[Assert\Choice(choices: [
        self::CONDITIONING_TYPE_CENTRAL,
        self::CONDITIONING_TYPE_LOCAL,
        self::CONDITIONING_TYPE_NO,
    ])]
    public ?string $ConditioningType;
}