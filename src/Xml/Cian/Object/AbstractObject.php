<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\BargainTerms\BargainTerms;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Building\Building;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Coordinates\Coordinates;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Phones\Phones;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Photos\Photos;
use Symfony\Component\Validator\Constraints as Assert;

abstract class AbstractObject
{
    const CATEGORY_GARAGE_RENT = 'garageRent';
    const CATEGORY_GARAGE_SALE = 'garageSale';
    const CATEGORY_BUSINESS_SALE = 'businessSale';
    const CATEGORY_BUILDING_RENT = 'buildingRent';
    const CATEGORY_BUILDING_SALE = 'buildingSale';
    const CATEGORY_COMMERCIAL_LAND_RENT = 'commercialLandRent';
    const CATEGORY_COMMERCIAL_LAND_SALE = 'commercialLandSale';
    const CATEGORY_OFFICE_RENT = 'officeRent';
    const CATEGORY_OFFICE_SALE = 'officeSale';
    const CATEGORY_FREE_APPOINTMENT_OBJECT_RENT = 'freeAppointmentObjectRent';
    const CATEGORY_FREE_APPOINTMENT_OBJECT_SALE = 'freeAppointmentObjectSale';
    const CATEGORY_INDUSTRY_RENT = 'industryRent';
    const CATEGORY_INDUSTRY_SALE = 'industrySale';
    const CATEGORY_WAREHOUSE_RENT = 'warehouseRent';
    const CATEGORY_WAREHOUSE_SALE = 'warehouseSale';
    const CATEGORY_SHOPPING_AREA_RENT = 'shoppingAreaRent';
    const CATEGORY_SHOPPING_AREA_SALE = 'shoppingAreaSale';

    const LAYOUT_CABINET = 'cabinet';
    const LAYOUT_CORRIDOR_PLAN = 'corridorplan';
    const LAYOUT_MIXED = 'mixed';
    const LAYOUT_OPEN_SPACE = 'openSpace';

    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::CATEGORY_GARAGE_RENT,
        self::CATEGORY_GARAGE_SALE,
        self::CATEGORY_BUSINESS_SALE,
        self::CATEGORY_BUILDING_RENT,
        self::CATEGORY_BUILDING_SALE,
        self::CATEGORY_COMMERCIAL_LAND_RENT,
        self::CATEGORY_COMMERCIAL_LAND_SALE,
        self::CATEGORY_OFFICE_RENT,
        self::CATEGORY_OFFICE_SALE,
        self::CATEGORY_FREE_APPOINTMENT_OBJECT_RENT,
        self::CATEGORY_FREE_APPOINTMENT_OBJECT_SALE,
        self::CATEGORY_INDUSTRY_RENT,
        self::CATEGORY_INDUSTRY_SALE,
        self::CATEGORY_WAREHOUSE_RENT,
        self::CATEGORY_WAREHOUSE_SALE,
        self::CATEGORY_SHOPPING_AREA_RENT,
        self::CATEGORY_SHOPPING_AREA_SALE,
    ])]
    public string $Category;
    #[Assert\NotBlank]
    public string $ExternalId;
    #[Assert\NotBlank]
    public string $Description;
    #[Assert\NotBlank]
    public string $Address;
    #[Assert\NotBlank]
    public float $TotalArea;
    #[Assert\NotBlank]
    public int $FloorNumber;
    #[Assert\Choice(choices: [
        self::LAYOUT_CABINET,
        self::LAYOUT_CORRIDOR_PLAN,
        self::LAYOUT_MIXED,
        self::LAYOUT_OPEN_SPACE,
    ])]
    public ?string $Layout;
    #[Assert\NotBlank]
    public Building $Building;
    #[Assert\NotBlank]
    public BargainTerms $BargainTerms;
    public ?Photos $Photos;
    public ?Coordinates $Coordinates;
    #[Assert\NotBlank]
    public Phones $Phones;
}