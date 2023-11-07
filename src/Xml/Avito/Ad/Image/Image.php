<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad\Image;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Image
{
    #[SerializedName('@url')]
    public ?string $url;
    #[SerializedName('@name')]
    public ?string $name;
}