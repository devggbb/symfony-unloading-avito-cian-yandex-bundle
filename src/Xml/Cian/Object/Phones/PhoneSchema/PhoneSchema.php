<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Phones\PhoneSchema;

use Symfony\Component\Validator\Constraints as Assert;

class PhoneSchema
{
    #[Assert\NotBlank]
    public string $CountryCode;
    #[Assert\NotBlank]
    public string $Number;
}