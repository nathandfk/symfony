<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XxBWWiService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.XxBW_Wi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XxBW_Wi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'reservRep' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'user' => ['privates', '.errored..service_locator.XxBW_Wi.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.XxBW_Wi": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'doctrine' => '?',
            'paginator' => '?',
            'reservRep' => 'App\\Repository\\ReservationRepository',
            'security' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
