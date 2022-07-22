<?php

namespace ContainerK67EvxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3c6PKXOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3c6PKXO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3c6PKXO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'doctrine' => '?',
            'security' => '?',
        ]);
    }
}
