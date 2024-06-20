<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle;

use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\AvitoSource;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\CianSource;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\XmlSourceInterface;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Xml\YandexSource;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SymfonyUploadingAvitoCianYandexBundle extends AbstractBundle
{
    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->arrayNode('sources')
            ->arrayPrototype()
            ->children()
            ->scalarNode('source')->end()
            ->scalarNode('normalizer')->end()
            ->end()
            ->end()
            ->end()
            ->arrayNode('uploading')
            ->children()
            ->scalarNode('entity')->end()
            ->end()
            ->end()
            ->end();
    }

    public function loadExtension(array $config, ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void
    {
        $containerConfigurator->import(__DIR__ . '/../config/services.yaml');
        $definitionUploadingXmlNormalizer = $containerBuilder->getDefinition('symfony_uploading_avito_cian_yandex.uploading_xml_normalizer');
        /** @var XmlSourceInterface $sourceClass */
        foreach ([new AvitoSource(), new CianSource(), new YandexSource()] as $sourceClass) {
            if (!empty($config['sources'][$sourceClass::getSource()]) && empty($config['sources'][$sourceClass::getSource()]['source'])) {
                $config['sources'][$sourceClass::getSource()]['source'] = $sourceClass::class;
            }
        }
        $definitionUploadingXmlNormalizer->setArgument('$sources', $config['sources']);

        $definitionUploadingService = $containerBuilder->getDefinition('symfony_uploading_avito_cian_yandex.uploading_service');
        $definitionUploadingService->setArgument('$uploadingEntityClassName', $config['uploading']['entity']);
    }

}