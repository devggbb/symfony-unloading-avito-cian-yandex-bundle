<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Specialty;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Specialty\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;

class Specialty
{
    #[Assert\NotBlank]
    public Types $Types;
}