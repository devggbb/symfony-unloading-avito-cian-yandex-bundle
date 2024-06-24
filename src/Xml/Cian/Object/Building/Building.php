<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Building;

use Symfony\Component\Validator\Constraints as Assert;

class Building
{
    const CONDITIONING_TYPE_CENTRAL = 'central';
    const CONDITIONING_TYPE_LOCAL = 'local';
    const CONDITIONING_TYPE_NO = 'no';

    const TYPE_ADMINISTRATIVE_BUILDING = 'administrativeBuilding';
    const TYPE_BUSINESS_CENTER = 'businessCenter';
    const TYPE_SHOPPING_CENTER = 'shoppingCenter';
    const TYPE_RESIDENTIAL_HOUSE = 'residentialHouse';
    const TYPE_STANDALONE_BUILDING = 'standaloneBuilding';
    const TYPE_WAREHOUSE = 'warehouse';

    public ?string $Name;
    #[Assert\NotBlank]
    public int $FloorsCount;
    public ?int $BuildYear;
    public ?float $TotalArea;
    public ?float $CeilingHeight;
    #[Assert\Choice(choices: [
        self::TYPE_ADMINISTRATIVE_BUILDING,
        self::TYPE_BUSINESS_CENTER,
        self::TYPE_SHOPPING_CENTER,
        self::TYPE_RESIDENTIAL_HOUSE,
        self::TYPE_STANDALONE_BUILDING,
        self::TYPE_WAREHOUSE,
    ])]
    public ?string $Type;
    #[Assert\Choice(choices: [
        self::CONDITIONING_TYPE_CENTRAL,
        self::CONDITIONING_TYPE_LOCAL,
        self::CONDITIONING_TYPE_NO,
    ])]
    public ?string $ConditioningType;
}