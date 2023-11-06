<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface\UploadingXmlNormalizerInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Exception\UploadingValidationException;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\XmlSourceInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UploadingXmlNormalizer implements NormalizerInterface
{
    public function __construct(
        private array $sources,
        private ValidatorInterface $validator,
    )
    {
    }

    /**
     * @param UploadingXmlNormalizerInterface $object
     * @param string|null $format
     * @param array $context
     * @return mixed
     * @throws UploadingValidationException
     */
    public function normalize(mixed $object, string $format = null, array $context = [])
    {
        if (empty($source = $this->sources[$format])) {
            throw new \Exception('Format not found');
        }

        /** @var XmlSourceInterface $sourceClass */
        $sourceClass = new $source['source']();
        $normalizer = new $source['normalizer']();

        $normalizedData = $normalizer->normalize($object, $sourceClass->getItem());
        $errors = $this->validator->validate($normalizedData);
        if ($errors->count() > 0) {
            throw new UploadingValidationException($errors);
        }
        return $normalizedData;
    }

    public function supportsNormalization(mixed $data, string $format = null)
    {
        return $data instanceof UploadingXmlNormalizerInterface;
    }
}