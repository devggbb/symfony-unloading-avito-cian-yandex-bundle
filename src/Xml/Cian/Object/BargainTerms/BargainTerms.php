<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\BargainTerms;

use Symfony\Component\Validator\Constraints as Assert;

class BargainTerms
{
    const PRICE_TYPE_ALL = 'all';
    const PRICE_TYPE_HECTARE = 'hectare';
    const PRICE_TYPE_SOTKA = 'sotka';
    const PRICE_TYPE_SQUARE_METER = 'squareMeter';

    const VAL_TYPE_INCLUDED = 'included';
    const VAL_TYPE_NOT_INCLUDED = 'notIncluded';
    const VAL_TYPE_USN = 'usn';

    const CURRENCY_EUR = 'eur';
    const CURRENCY_RUR = 'rur';
    const CURRENCY_USD = 'usd';

    const PAYMENT_PERIOD_ANNUAL = 'annual';
    const PAYMENT_PERIOD_MONTHLY = 'monthly';

    const LEASE_TYPE_DIRECT = 'direct';
    const LEASE_TYPE_SUBLEASE = 'sublease';


    #[Assert\NotBlank]
    public float $Price;
    #[Assert\Choice(choices: [
        self::PRICE_TYPE_ALL,
        self::PRICE_TYPE_HECTARE,
        self::PRICE_TYPE_SOTKA,
        self::PRICE_TYPE_SQUARE_METER,
    ])]
    public ?string $PriceType;
    #[Assert\Choice(choices: [
        self::CURRENCY_EUR,
        self::CURRENCY_RUR,
        self::CURRENCY_USD,
    ])]
    public ?string $Currency;
    #[Assert\Choice(choices: [
        self::PAYMENT_PERIOD_ANNUAL,
        self::PAYMENT_PERIOD_MONTHLY,
    ])]
    public ?string $PaymentPeriod;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::VAL_TYPE_INCLUDED,
        self::VAL_TYPE_NOT_INCLUDED,
        self::VAL_TYPE_USN,
    ])]
    public string $VatType;
    #[Assert\Choice(choices: [
        self::LEASE_TYPE_DIRECT,
        self::LEASE_TYPE_SUBLEASE,
    ])]
    public ?string $LeaseType;
    public ?int $ClientFee;
    public ?int $AgentFee;
}