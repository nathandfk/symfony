<?php

namespace ContainerRZfxHbC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZoBtvSEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZoBtvSE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZoBtvSE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dataSite' => ['privates', 'App\\Data\\DataSite', 'getDataSiteService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'user' => ['privates', '.errored..service_locator.ZoBtvSE.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.ZoBtvSE": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'dataSite' => 'App\\Data\\DataSite',
            'doctrine' => '?',
            'security' => '?',
            'slugger' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
