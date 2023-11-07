<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Yandex\Offer\SalesAgent;

use Symfony\Component\Validator\Constraints as Assert;

class SalesAgent
{
    const CATEGORY_AGENCY = 'agency';
    const CATEGORY_OWNER = 'owner';
    const CATEGORY_DEVELOPER = 'developer';

    public ?string $name;
    #[Assert\NotBlank]
    public string $phone;
    #[Assert\NotBlank]
    #[Assert\Choice(choices: [
        self::CATEGORY_AGENCY,
        self::CATEGORY_OWNER,
        self::CATEGORY_DEVELOPER,
    ])]
    public string $category;
    public ?string $organization;
    public ?string $url;
    public ?string $email;
    public ?string $photo;
    public ?string $partner;
}