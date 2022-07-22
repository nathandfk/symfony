<?php

namespace ContainerK67EvxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RhcgfMNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rhcgfMN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rhcgfMN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dwellingRepository' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'doctrine' => '?',
            'dwellingRepository' => 'App\\Repository\\DwellingRepository',
            'security' => '?',
        ]);
    }
}
