<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DY_5ozkService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.dY.5ozk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dY.5ozk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dataUsers' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dwelRep' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'dataUsers' => 'App\\Repository\\UsersRepository',
            'doctrine' => '?',
            'dwelRep' => 'App\\Repository\\DwellingRepository',
            'paginator' => '?',
            'security' => '?',
        ]);
    }
}
