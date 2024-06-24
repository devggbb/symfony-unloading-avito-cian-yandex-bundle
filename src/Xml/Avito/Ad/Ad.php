<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad;


use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad\Image\Images;
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
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-ContactMethod
     */
    const CONTRACT_METHOD_PHONE_MESSAGE = 'По телефону и в сообщениях';
    const CONTRACT_METHOD_PHONE = 'По телефону';
    const CONTRACT_METHOD_MESSAGE = 'В сообщениях';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-Category
     */
    const CATEGORY_COMMERCIAL_REAL_ESTATE = 'Коммерческая недвижимость';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-OperationType
     */
    const OPERATION_TYPE_RENT = 'Сдам';
    const OPERATION_TYPE_SELL = 'Продам';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-ObjectType
     */
    const OBJECT_TYPE_OFFICE_SPACE = 'Офисное помещение';
    const OBJECT_TYPE_FREE_APPOINTMENT = 'Помещение свободного назначения';
    const OBJECT_TYPE_COMMERCIAL_PREMISES = 'Торговое помещение';
    const OBJECT_TYPE_STORAGE_ROOM = 'Складское помещение';
    const OBJECT_TYPE_PRODUCTION_PREMISES = 'Производственное помещение';
    const OBJECT_TYPE_CATERING_PREMISES = 'Помещение общественного питания';
    const OBJECT_TYPE_HOTEL = 'Гостиница';
    const OBJECT_TYPE_CAR_SERVICE = 'Автосервис';
    const OBJECT_TYPE_BUILDING = 'Здание';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-AdditionalObjectTypes
     */
    const ADDITIONAL_OBJECT_TYPES_OFFICE = 'Офис';
    const ADDITIONAL_OBJECT_TYPES_FREE_APPOINTMENT = 'Свободного назначения';
    const ADDITIONAL_OBJECT_TYPES_COMMERCIAL_PREMISES = 'Торговое помещение';
    const ADDITIONAL_OBJECT_TYPES_WAREHOUSE = 'Склад';
    const ADDITIONAL_OBJECT_TYPES_PRODUCTION = 'Производство';
    const ADDITIONAL_OBJECT_TYPES_CATERING = 'Общепит';
    const ADDITIONAL_OBJECT_TYPES_HOTEL = 'Гостиница';
    const ADDITIONAL_OBJECT_TYPES_CAR_SERVICE = 'Автосервис';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-PropertyRights
     */
    const PROPERTY_RIGHTS_OWNER = 'Собственник';
    const PROPERTY_RIGHTS_BROKER = 'Посредник';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-PremisesType
     */
    const PROPERTY_TYPE_STREET_TRADING = 'Для уличной торговли';
    const PROPERTY_TYPE_SHOPPING_COMPLEX = 'В торговом комплексе';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-Entrance
     */
    const ENTRANCE_STREET = 'С улицы';
    const ENTRANCE_YARD = 'Со двора';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086?fileFormat=excel#field-EntranceAdditionally
     */
    const ENTRANCE_ADDITIONALLY = 'Отдельный вход';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-Floor
     */
    const FLOOR_BASEMENT = 'Подвальный';
    const FLOOR_SOCLE = 'Цокольный';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-Layout
     */
    const LAYOUT_ROOM = 'Кабинетная';
    const LAYOUT_OPEN = 'Открытая';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-Decoration
     */
    const DECORATION_WITHOUT_FINISHING = 'Без отделки';
    const DECORATION_FINISHING = 'Чистовая';
    const DECORATION_OFFICE = 'Офисная';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-Heating
     */
    const HEATING_NO = 'Нет';
    const HEATING_CENTER = 'Центральное';
    const HEATING_AUTONOMOUS = 'Автономное';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-BuildingType
     */
    const BUILDING_TYPE_BUSINESS_CENTER = 'Бизнес-центр';
    const BUILDING_TYPE_SHOPPING_CENTER = 'Торговый центр';
    const BUILDING_TYPE_ADMINISTRATIVE_BUILDING = 'Административное здание';
    const BUILDING_TYPE_RESIDENTIAL_BUILDING = 'Жилой дом';
    const BUILDING_TYPE_ANOTHER = 'Другой';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-ParkingType
     */
    const PARKING_TYPE_NO = 'Нет';
    const PARKING_TYPE_STREET = 'На улице';
    const PARKING_TYPE_BUILD = 'В здании';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-RentalType
     */
    const RENTAL_TYPE_DIRECT = 'Прямая';
    const RENTAL_TYPE_SUBLEASE = 'Субаренда';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-PriceType
     */
    const PRICE_TYPE_MOUNTS = 'в месяц';
    const PRICE_TYPE_MOUNTS_M2 = 'в месяц за м2';
    const PRICE_TYPE_YEAR = 'в год';
    const PRICE_TYPE_YEAR_M2 = 'в год за м2';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086#field-LeaseDeposit
     */
    const LEASE_DEPOSIT_NOT = 'Без залога';
    const LEASE_DEPOSIT_05 = '0,5 месяца';
    const LEASE_DEPOSIT_1 = '1 месяц';
    const LEASE_DEPOSIT_15 = '1,5 месяца';
    const LEASE_DEPOSIT_2 = '2 месяца';
    const LEASE_DEPOSIT_25 = '2,5 месяца';
    const LEASE_DEPOSIT_3 = '3 месяца';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086?fileFormat=excel#field-PriceWithVAT
     */
    const PRICE_WITH_VAT_YES = 'Да';
    const PRICE_WITH_VAT_NO = 'Нет';
    /*
     * https://www.avito.ru/autoload/documentation/templates/67086?fileFormat=excel#field-LeasePriceOptions
     */
    const LEASE_PRICE_OPTIONS_COUNTERS = 'Оплата по счетчикам включена';
    const LEASE_PRICE_OPTIONS_SERVICES = 'Коммунальные услуги включены';
    const LEASE_PRICE_OPTIONS_EXPLOITATION = 'Эксплуатационные расходы включены';


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
    public ?Images $Images;
    public ?string $VideoURL;
    #[Assert\NotBlank]
    public string $Address;
    public ?string $Longitude;
    public ?string $Latitude;
    #[Assert\Choice(choices: [
        self::CONTRACT_METHOD_PHONE_MESSAGE,
        self::CONTRACT_METHOD_PHONE,
        self::CONTRACT_METHOD_MESSAGE,
    ])]
    public ?string $ContactMethod = self::CONTRACT_METHOD_PHONE_MESSAGE;
    #[Assert\Choice(choices: [
        self::CATEGORY_COMMERCIAL_REAL_ESTATE,
    ])]
    public string $Category = self::CATEGORY_COMMERCIAL_REAL_ESTATE;
    public ?string $Title;
    #[Assert\NotBlank]
    public string $Price;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::OPERATION_TYPE_RENT,
        self::OPERATION_TYPE_SELL,
    ])]
    public string $OperationType;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::OBJECT_TYPE_OFFICE_SPACE,
        self::OBJECT_TYPE_FREE_APPOINTMENT,
        self::OBJECT_TYPE_COMMERCIAL_PREMISES,
        self::OBJECT_TYPE_STORAGE_ROOM,
        self::OBJECT_TYPE_PRODUCTION_PREMISES,
        self::OBJECT_TYPE_CATERING_PREMISES,
        self::OBJECT_TYPE_HOTEL,
        self::OBJECT_TYPE_CAR_SERVICE,
        self::OBJECT_TYPE_BUILDING,
    ])]
    public string $ObjectType;
    public ?string $AdditionalObjectTypes;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::PROPERTY_RIGHTS_OWNER,
        self::PROPERTY_RIGHTS_BROKER,
    ])]
    public string $PropertyRights;
    #[Assert\Choice(choices: [
        self::PROPERTY_TYPE_STREET_TRADING,
        self::PROPERTY_TYPE_SHOPPING_COMPLEX,
    ])]
    public ?string $PremisesType;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::ENTRANCE_STREET,
        self::ENTRANCE_YARD,
    ])]
    public string $Entrance;
    #[Assert\Choice(choices: [
        self::ENTRANCE_ADDITIONALLY,
    ])]
    public ?string $EntranceAdditionally;
    #[Assert\NotBlank]
    public string $Floor;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::LAYOUT_ROOM,
        self::LAYOUT_OPEN,
    ])]
    public string $Layout;
    #[Assert\NotBlank]
    public string $Square;
    public ?string $CeilingHeight;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::DECORATION_WITHOUT_FINISHING,
        self::DECORATION_FINISHING,
        self::DECORATION_OFFICE,
    ])]
    public string $Decoration;
    #[Assert\Choice(choices: [
        self::HEATING_NO,
        self::HEATING_CENTER,
        self::HEATING_AUTONOMOUS,
    ])]
    public ?string $Heating;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::BUILDING_TYPE_BUSINESS_CENTER,
        self::BUILDING_TYPE_SHOPPING_CENTER,
        self::BUILDING_TYPE_ADMINISTRATIVE_BUILDING,
        self::BUILDING_TYPE_RESIDENTIAL_BUILDING,
        self::BUILDING_TYPE_ANOTHER,
    ])]
    public ?string $BuildingType;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::PARKING_TYPE_NO,
        self::PARKING_TYPE_STREET,
        self::PARKING_TYPE_BUILD,
    ])]
    public ?string $ParkingType;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::RENTAL_TYPE_DIRECT,
        self::RENTAL_TYPE_SUBLEASE,
    ])]
    public ?string $RentalType;
    #[Assert\Choice(choices: [
        self::PRICE_TYPE_MOUNTS,
        self::PRICE_TYPE_MOUNTS_M2,
        self::PRICE_TYPE_YEAR,
        self::PRICE_TYPE_YEAR_M2,
    ])]
    public ?string $PriceType;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::LEASE_DEPOSIT_NOT,
        self::LEASE_DEPOSIT_05,
        self::LEASE_DEPOSIT_1,
        self::LEASE_DEPOSIT_15,
        self::LEASE_DEPOSIT_2,
        self::LEASE_DEPOSIT_25,
        self::LEASE_DEPOSIT_3,
    ])]
    public ?string $LeaseDeposit;
    #[Assert\NotBlank]
    public ?int $LeaseCommissionSize;
    #[Assert\Choice(choices: [
        self::PRICE_WITH_VAT_YES,
        self::PRICE_WITH_VAT_NO,
    ])]
    public ?string $PriceWithVAT;
    public ?string $LeasePriceOptions;
}