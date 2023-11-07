<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Offer;
use Symfony\Component\Validator\Constraints as Assert;

class RealtyFeed
{
    /**
     * @var array|Offer[]
     */
    #[Assert\NotBlank]
    public array $offer;
}