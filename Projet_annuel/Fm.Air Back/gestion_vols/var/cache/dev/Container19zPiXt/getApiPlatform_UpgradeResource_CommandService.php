<?php

namespace Container19zPiXt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_UpgradeResource_CommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.upgrade_resource.command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\UpgradeApiResourceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'UpgradeApiResourceCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'SubresourceTransformer.php';

        $container->privates['api_platform.upgrade_resource.command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\UpgradeApiResourceCommand(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataFactory_CachedService($container)), ($container->privates['api_platform.subresource_operation_factory.cached'] ?? self::getApiPlatform_SubresourceOperationFactory_CachedService($container)), new \ApiPlatform\Core\Upgrade\SubresourceTransformer(), ($container->privates['api_platform.identifiers_extractor.cached'] ?? self::getApiPlatform_IdentifiersExtractor_CachedService($container)), ($container->privates['annotations.reader'] ?? self::getAnnotations_ReaderService($container)));

        $instance->setName('api:upgrade-resource');

        return $instance;
    }
}