```
symfony_uploading_avito_cian_yandex:
  sources:
    avito:
      normalizer: App\UploadingSerializer\AvitoNormalizer
    cian:
      normalizer: App\UploadingSerializer\CianNormalizer
    yandex:
      normalizer: App\UploadingSerializer\YandexNormalizer
  uploading:
    entity: App\Entity\EstateObjectUploading
```

```
class UploadingController
{
    public function __construct(
        private EstateObjectRepository $estateObjectRepository,
        private UploadingService $uploadingService,
    ) 
    {
    }

    #[Route('/uploading', name: 'app_uploading', defaults: ['_format' => 'xml'])]
    public function uploading(): Response
    {
        $object = $this->estateObjectRepository->findBy([]);
        $source = new AvitoSource();
        try {
            $xml = $this->uploadingService->generateXML($object, $source);
        } catch (UploadingValidationException $exception) {
            // $exception->getErrors()
        }

        return new Response($xml);
    }
}
```

```
class EntityObject implements UploadingXmlNormalizerInterface 
{
...
}
```

```
<?php

namespace App\UploadingSerializer;

use App\Entity\EstateObject;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Serializer\Interface\AvitoNormalizerInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\Avito\Ad\Ad;

class AvitoNormalizer implements AvitoNormalizerInterface
{
    /**
     * @param mixed|EntityObject $object
     * @param Ad $ad
     * @return Ad
     */
    public function normalize(mixed $object, Ad $ad): Ad
    {
        $ad = new Ad();
        $ad->Id = $object->getId();
        $ad->DateBegin = new \DateTime();
        $ad->DateEnd = new \DateTime();
        $ad->ListingFee = Ad::LISTING_FEE_SINGLE;
        $ad->ManagerName = $object->getUser()->getName();
        $ad->ContactPhone = $object->getUser()->getPhone();
        $ad->Description = $object->getDescription();
        
        ...

        return $ad;
    }
}
```