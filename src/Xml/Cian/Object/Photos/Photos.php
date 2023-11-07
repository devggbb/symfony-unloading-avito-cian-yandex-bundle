<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Photos;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Photos\PhotoSchema\PhotoSchema;
use Symfony\Component\Validator\Constraints as Assert;

class Photos
{
    /**
     * @var array|PhotoSchema[]
     */
    #[Assert\NotBlank]
    public array $PhotoSchema;
}