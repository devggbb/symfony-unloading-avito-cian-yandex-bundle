<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\Location;

use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;

class Location
{
    const COUNTRY_RUSSIA = 'Россия';

    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::COUNTRY_RUSSIA,
    ])]
    public string $country = self::COUNTRY_RUSSIA;
    public ?string $region;
    public ?string $district;
    #[SerializedName('locality-name')]
    public ?string $localityName;
    #[SerializedName('sub-locality-name')]
    public ?string $subLocalityName;
    public ?string $address;
    public ?string $apartment;
    public ?string $direction;
    public ?string $distance;
    public ?string $latitude;
    public ?string $longitude;
}