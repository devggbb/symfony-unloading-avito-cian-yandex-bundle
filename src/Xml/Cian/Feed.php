<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Cian;

use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;

class Feed
{
    const FEED_VERSION = 2;

    #[SerializedName('feed_version')]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::FEED_VERSION,
    ])]
    public int $feedVersion = self::FEED_VERSION;

    /**
     * @var array ObjectFeed[]
     */
    #[Assert\NotBlank]
    public array $object;
}