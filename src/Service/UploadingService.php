<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\AbstractUploading;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface\UploadingInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\interface\UploadingXmlNormalizerInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\UploadingXmlNormalizer;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Type\StatusType;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\XmlSourceInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class UploadingService implements UploadingServiceInterface
{
    public function __construct(
        private readonly SerializerInterface    $serializer,
        private readonly UploadingXmlNormalizer $normalizer,
        private readonly EntityManagerInterface $entityManager,
        private readonly string                 $uploadingEntityClassName,
    )
    {
    }

    public function prepareAddObject(UploadingInterface $uploading, XmlSourceInterface $source): UploadingInterface
    {
        $uploadingRepository = $this->entityManager->getRepository($this->uploadingEntityClassName);
        if ($uploadingRepository->findOneBy(['object' => $uploading->getObject(), 'source' => $source::getSource(), 'status' => StatusType::PUBLISHED])) {
            throw new \Exception('The object has already been unloaded');
        }

        /** @var AbstractUploading $uploading */
        $uploading->setStatus(StatusType::PUBLISHED);
        $uploading->setSource($source::getSource());

        return $uploading;
    }

    public function addObject(UploadingXmlNormalizerInterface $object, XmlSourceInterface $source): UploadingInterface
    {
        $uploadingRepository = $this->entityManager->getRepository($this->uploadingEntityClassName);
        if ($uploadingRepository->findOneBy(['object' => $object, 'source' => $source::getSource(), 'status' => StatusType::PUBLISHED])) {
            throw new \Exception('The object has already been unloaded');
        }

        /** @var AbstractUploading $uploading */
        $uploading = new $this->uploadingEntityClassName();
        $uploading->setObject($object);
        $uploading->setStatus(StatusType::OFF);
        $uploading->setSource($source::getSource());

        return $uploading;
    }

    public function removeObject(UploadingXmlNormalizerInterface $object, XmlSourceInterface $source): UploadingInterface
    {
        $uploadingRepository = $this->entityManager->getRepository($this->uploadingEntityClassName);
        $uploading = $uploadingRepository->findOneBy(['object' => $object, 'source' => $source::getSource(), 'status' => StatusType::PUBLISHED]);
        if (!$uploading) {
            throw new \Exception('Uploading not found');
        }
        $uploading->setStatus(StatusType::OFF);

        $this->entityManager->persist($uploading);
        $this->entityManager->flush();

        return $uploading;
    }

    /**
     * @param array|UploadingXmlNormalizerInterface[] $object
     * @param XmlSourceInterface $source
     * @return string
     * @throws \Exception
     */
    public function generateXML(array $object, XmlSourceInterface $source): string
    {
        $node = $source->nodeGenerate($this->normalizer, $object);
        $xml = $this->serializer->serialize(
            $node,
            XmlEncoder::FORMAT,
            [
                XmlEncoder::ROOT_NODE_NAME => $source->getNodeName(),
                XmlEncoder::ENCODING => 'UTF-8',
            ],
        );
        return $xml;
    }
}