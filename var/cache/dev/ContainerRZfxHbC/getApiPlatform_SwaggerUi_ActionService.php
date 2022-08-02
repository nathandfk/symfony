<?php

namespace ContainerRZfxHbC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_SwaggerUi_ActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.swagger_ui.action' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/SwaggerUi/SwaggerUiAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/SwaggerUi/SwaggerUiContext.php';

        return $container->services['api_platform.swagger_ui.action'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiAction(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['twig'] ?? $container->load('getTwigService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['serializer'] ?? $container->getSerializerService()), ($container->privates['App\\OpenApi\\JwtDecorator'] ?? $container->load('getJwtDecoratorService')), ($container->privates['api_platform.openapi.options'] ?? $container->load('getApiPlatform_Openapi_OptionsService')), new \ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiContext(true, true, true, false, false, false, NULL), $container->parameters['api_platform.formats'], '', '');
    }
}
