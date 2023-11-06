<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad\Ad;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Ads
{
    #[SerializedName('@target')]
    public string $_target = 'Avito.ru';
    #[SerializedName('@formatVersion')]
    public int $_formatVersion = 3;
    /**
     * @var array|Ad[]
     */
    public array $Ad = [];
}