<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Service;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface\UploadingXmlNormalizerInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\UploadingXmlNormalizer;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\XmlSourceInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class UploadingService
{
    public function __construct(
        private SerializerInterface $serializer,
        private UploadingXmlNormalizer $normalizer,
    )
    {
    }

    /**
     * @param array|UploadingXmlNormalizerInterface[] $object
     * @param XmlSourceInterface $source
     * @return string
     * @throws \Exception
     */
    public function generateXML(array $object, XmlSourceInterface $source)
    {
        $node = $source->nodeGenerate($this->normalizer, $object);
        $xml = $this->serializer->serialize(
            $node,
            XmlEncoder::FORMAT,
            [
                XmlEncoder::ROOT_NODE_NAME => 'Ads',
                XmlEncoder::ENCODING => 'UTF-8',
            ],
        );
        return $xml;
//        $normalizedData = [];
//        foreach ($object as $item) {
//            $normalizedData[] = $this->normalizer->normalize($item, $source::getSource());
//        }
//        $normalizedData = $source->wrapper([$normalizedData]);
//
//        dd($normalizedData);
//
//        $jsonContent = $this->serializer->serialize(
//            $normalizedData,
//            XmlEncoder::FORMAT,
//            [
//                XmlEncoder::ROOT_NODE_NAME => 'Ads',
//                XmlEncoder::ENCODING => 'UTF-8',
//            ],
//        );
//        return $jsonContent;
    }
}