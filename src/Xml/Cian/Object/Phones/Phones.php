<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Phones;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Phones\PhoneSchema\PhoneSchema;
use Symfony\Component\Validator\Constraints as Assert;

class Phones
{
    /**
     * @var array|PhoneSchema[]
     */
    #[Assert\NotBlank]
    public array $PhoneSchema;
}