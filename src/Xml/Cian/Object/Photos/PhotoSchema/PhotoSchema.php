<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian\Object\Photos\PhotoSchema;

use Symfony\Component\Validator\Constraints as Assert;

class PhotoSchema
{
    const PHOTO_TYPE_REALTY_OBJECT = 'realtyObject';
    const PHOTO_TYPE_REALTY_OBJECT_LAYOUT = 'realtyObjectLayout';
    const PHOTO_TYPE_REALTY_FLOOR_LAYOUT = 'realtyFloorLayout';

    #[Assert\NotBlank]
    public string $FullUrl;
    public ?bool $IsDefault;
    #[Assert\Choice(choices: [
        self::PHOTO_TYPE_REALTY_OBJECT,
        self::PHOTO_TYPE_REALTY_OBJECT_LAYOUT,
        self::PHOTO_TYPE_REALTY_FLOOR_LAYOUT,
    ])]
    public ?string $PhotoType;
}