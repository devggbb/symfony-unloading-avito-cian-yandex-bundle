<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\UploadingXmlNormalizer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

abstract class AbstractXmlSource implements XmlSourceInterface
{
    public function nodeGenerate(
        UploadingXmlNormalizer $normalizer,
        array $objects): mixed
    {
        $normalizedData = [];
        foreach ($objects as $item) {
            $normalizedData[] = $normalizer->normalize($item, $this::getSource());
        }
        return $this->wrapper($normalizedData);
    }
}