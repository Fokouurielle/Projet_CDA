<?php

namespace Container19zPiXt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Identifier_SymfonyUlidNormalizerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.identifier.symfony_ulid_normalizer' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Identifier\Normalizer\UlidNormalizer
     *
     * @deprecated Since api-platform/core 2.7: The "api_platform.identifier.symfony_ulid_normalizer" service is deprecated since 2.7 and will be removed in 3.0. Use the "api_platform.symfony.uri_variables.transformer.ulid" service instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('api-platform/core', '2.7', 'The "api_platform.identifier.symfony_ulid_normalizer" service is deprecated since 2.7 and will be removed in 3.0. Use the "api_platform.symfony.uri_variables.transformer.ulid" service instead.');

        return $container->privates['api_platform.identifier.symfony_ulid_normalizer'] = new \ApiPlatform\Core\Bridge\Symfony\Identifier\Normalizer\UlidNormalizer();
    }
}
