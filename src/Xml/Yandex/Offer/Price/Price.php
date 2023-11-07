<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Price;

use Symfony\Component\Validator\Constraints as Assert;

class Price
{
    const CURRENCY_RUR = 'RUR';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_USD = 'USD';

    const PERIOD_DAY = 'day';
    const PERIOD_MONTH = 'month';

    #[Assert\NotBlank]
    public float $value;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::CURRENCY_RUR,
        self::CURRENCY_EUR,
        self::CURRENCY_USD,
    ])]
    public string $currency;
    #[Assert\Choice(choices: [
        self::PERIOD_DAY,
        self::PERIOD_MONTH,
    ])]
    public ?string $period;
}