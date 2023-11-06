<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad;


use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Xml\Ad\Image\Image;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Автозагрузка
 * https://www.avito.ru/autoload/documentation/templates/67086
 */
class Ad
{
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-ListingFee
     */
    const LISTING_FEE_PACKAGE = 'Package';
    const LISTING_FEE_PACKAGE_SINGLE = 'PackageSingle';
    const LISTING_FEE_SINGLE = 'Single';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-AdStatus
     */
    const AD_STATUS_FREE = 'Free';
    const AD_STATUS_HIGH_LIGHT = 'Highlight';
    const AD_STATUS_XL = 'XL';
    const AD_STATUS_X2_1 = 'x2_1';
    const AD_STATUS_X2_7 = 'x2_7';
    const AD_STATUS_X5_1 = 'x5_1';
    const AD_STATUS_X5_7 = 'x5_7';
    const AD_STATUS_X10_1 = 'x10_1';
    const AD_STATUS_X10_7 = 'x10_7';
    const AD_STATUS_X15_1 = 'x15_1';
    const AD_STATUS_X15_7 = 'x15_7';
    const AD_STATUS_X20_1 = 'x20_1';
    const AD_STATUS_X20_7 = 'x20_7';

    #[Assert\NotBlank]
    public string $Id;
    public ?\DateTimeInterface $DateBegin;
    public ?\DateTimeInterface $DateEnd;
    #[Assert\Choice(choices: [self::LISTING_FEE_PACKAGE, self::LISTING_FEE_PACKAGE_SINGLE, self::LISTING_FEE_SINGLE])]
    public ?string $ListingFee = self::LISTING_FEE_PACKAGE;

    #[Assert\Choice(choices: [
        self::AD_STATUS_FREE,
        self::AD_STATUS_HIGH_LIGHT,
        self::AD_STATUS_XL,
        self::AD_STATUS_X2_1,
        self::AD_STATUS_X2_7,
        self::AD_STATUS_X5_1,
        self::AD_STATUS_X5_7,
        self::AD_STATUS_X10_1,
        self::AD_STATUS_X10_7,
        self::AD_STATUS_X15_1,
        self::AD_STATUS_X15_7,
        self::AD_STATUS_X20_1,
        self::AD_STATUS_X20_7,
    ])]
    public ?string $AdStatus = self::AD_STATUS_FREE;
    public ?int $AvitoId;
    public ?string $ManagerName;
    public ?string $ContactPhone;
    #[Assert\NotBlank]
    public string $Description;
//
//    /** @var Image[]|null  */
//    public ?array $Images;
//
//    public ?string $VideoURL;
//    #[Assert\NotBlank]
//    public string $Address;
//
//    public ?string $Longitude;
//    public ?string $Latitude;
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-Category
//    public string $Category;
//    public ?string $Title;
//    #[Assert\NotBlank]
//    public string $Price;
//    #[Assert\NotBlank]
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-OperationType
//    public string $OperationType;
//    #[Assert\NotBlank]
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-ObjectType
//    public string $ObjectType;
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-AdditionalObjectTypes
//    public ?string $AdditionalObjectTypes;
//    #[Assert\NotBlank]
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-PropertyRights
//    public string $PropertyRights;
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-PremisesType
//    public ?string $PremisesType;
//    #[Assert\NotBlank]
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-Entrance
//    public string $Entrance;
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-EntranceAdditionally
//    public ?string $EntranceAdditionally;
//    #[Assert\NotBlank]
//    // TODO: ????????????? https://www.avito.ru/autoload/documentation/templates/67086#field-Floor
//    public ?string $Floor;
}