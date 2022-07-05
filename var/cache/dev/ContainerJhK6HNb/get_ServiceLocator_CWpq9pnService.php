<?php

namespace ContainerJhK6HNb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CWpq9pnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CWpq9pn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CWpq9pn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dwelRep' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'doctrine' => '?',
            'dwelRep' => 'App\\Repository\\DwellingRepository',
            'paginator' => '?',
        ]);
    }
}
