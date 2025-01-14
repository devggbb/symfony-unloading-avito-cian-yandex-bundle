<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\BargainTerms\IncludedOptions;

use Symfony\Component\Validator\Constraints as Assert;

class IncludedOptions
{
    const OPERATIONAL_COSTS = 'operationalCosts';
    const UTILITY_CHARGES = 'utilityCharges';

    /**
     * @var array|string[]
     */
    #[Assert\Choice(choices: [
        self::OPERATIONAL_COSTS,
        self::UTILITY_CHARGES,
    ])]
    public ?array $IncludedOptionsEnum;
}