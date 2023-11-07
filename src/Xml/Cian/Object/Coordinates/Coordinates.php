<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Coordinates;

use Symfony\Component\Validator\Constraints as Assert;

class Coordinates
{
    #[Assert\NotBlank]
    public float $Lat;
    #[Assert\NotBlank]
    public float $Lng;
}