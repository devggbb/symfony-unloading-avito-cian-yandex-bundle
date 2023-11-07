<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Area\Area;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Location\Location;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Price\Price;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\SalesAgent\SalesAgent;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;

class Offer
{
    const TYPE_SALE = 'продажа';
    const TYPE_RENT = 'аренда';

    const CATEGORY_COMMERCIAL = 'commercial';

    const COMMERCIAL_TYPE_AUTO_REPAIR = 'auto repair';
    const COMMERCIAL_TYPE_BUSINESS = 'business';
    const COMMERCIAL_TYPE_FREE_PURPOSE = 'free purpose';
    const COMMERCIAL_TYPE_HOTEL = 'hotel';
    const COMMERCIAL_TYPE_LAND = 'land';
    const COMMERCIAL_TYPE_LEGAL_ADDRESS = 'legal address';
    const COMMERCIAL_TYPE_MANUFACTURING = 'manufacturing';
    const COMMERCIAL_TYPE_OFFICE = 'office';
    const COMMERCIAL_TYPE_PUBLIC_CATERING = 'public catering';
    const COMMERCIAL_TYPE_RETAIL = 'retail';
    const COMMERCIAL_TYPE_WAREHOUSE = 'warehouse';

    const COMMERCIAL_BUILDING_TYPE_BUSINESS_CENTER = 'business center';
    const COMMERCIAL_BUILDING_TYPE_DETACHED_BUILDING = 'detached building';
    const COMMERCIAL_BUILDING_TYPE_RESIDENTIAL_BUILDING = 'residential building';
    const COMMERCIAL_BUILDING_TYPE_SHOPPING_CENTER = 'shopping center';
    const COMMERCIAL_BUILDING_TYPE_WAREHOUSE = 'warehouse';

    const DEAL_STATUS_DIRECT_RENT = 'direct rent';
    const DEAL_STATUS_SUBRENT = 'subrent';
    const DEAL_STATUS_SALE_LEASE_RIGHTS = 'sale of lease rights';

    const ENTRANCE_TYPE_COMMON = 'common';
    const ENTRANCE_TYPE_SEPARATE = 'separate';

    #[SerializedName('@internal-id')]
    #[Assert\NotBlank]
    public string $internalId;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::TYPE_SALE,
        self::TYPE_RENT,
    ])]
    public string $type;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::CATEGORY_COMMERCIAL,
    ])]
    public string $category;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::COMMERCIAL_TYPE_AUTO_REPAIR,
        self::COMMERCIAL_TYPE_BUSINESS,
        self::COMMERCIAL_TYPE_FREE_PURPOSE,
        self::COMMERCIAL_TYPE_HOTEL,
        self::COMMERCIAL_TYPE_LAND,
        self::COMMERCIAL_TYPE_LEGAL_ADDRESS,
        self::COMMERCIAL_TYPE_MANUFACTURING,
        self::COMMERCIAL_TYPE_OFFICE,
        self::COMMERCIAL_TYPE_PUBLIC_CATERING,
        self::COMMERCIAL_TYPE_RETAIL,
        self::COMMERCIAL_TYPE_WAREHOUSE,
    ])]
    #[SerializedName('commercial-type')]
    public string $commercialType;
    #[SerializedName('commercial-building-type')]
    #[Assert\Choice(choices: [
        self::COMMERCIAL_BUILDING_TYPE_BUSINESS_CENTER,
        self::COMMERCIAL_BUILDING_TYPE_DETACHED_BUILDING,
        self::COMMERCIAL_BUILDING_TYPE_RESIDENTIAL_BUILDING,
        self::COMMERCIAL_BUILDING_TYPE_SHOPPING_CENTER,
        self::COMMERCIAL_BUILDING_TYPE_WAREHOUSE,
    ])]
    public ?string $commercialBuildingType;
    public ?string $url;
    #[SerializedName('creation-date')]
    public \DateTimeInterface $creationDate;
    #[Assert\NotBlank]
    public Location $location;
    #[Assert\NotBlank]
    #[SerializedName('sales-agent')]
    public SalesAgent $salesAgent;
    #[Assert\NotBlank]
    public Price $price;
    public ?int $commission;
    public ?int $prepayment;
    #[SerializedName('security-payment')]
    public ?int $securityPayment;
    #[SerializedName('rent-pledge')]
    public ?bool $rentPledge;
    #[SerializedName('deal-status')]
    #[Assert\Choice(choices: [
        self::DEAL_STATUS_DIRECT_RENT,
        self::DEAL_STATUS_SUBRENT,
        self::DEAL_STATUS_SALE_LEASE_RIGHTS,
    ])]
    public ?string $dealStatus;
    #[SerializedName('cleaning-included')]
    public ?bool $cleaningIncluded;
    #[Assert\NotBlank]
    public Area $area;
    #[Assert\NotBlank]
    /**
     * @var array|string[]
     */
    public array $image;
    public ?string $description;
    public ?string $rooms;
    #[Assert\NotBlank]
    public string $floor;
    #[Assert\NotBlank]
    #[SerializedName('floors-total')]
    public string $floorsTotal;
    #[Assert\Choice(choices: [
        self::ENTRANCE_TYPE_COMMON,
        self::ENTRANCE_TYPE_SEPARATE,
    ])]
    public ?string $entranceType;
    #[SerializedName('room-furniture')]
    public ?bool $roomFurniture;
    #[SerializedName('electric-capacity')]
    public ?int $electricCapacity;
}