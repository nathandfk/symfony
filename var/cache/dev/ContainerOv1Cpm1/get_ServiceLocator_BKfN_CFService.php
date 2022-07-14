<?php

namespace ContainerOv1Cpm1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BKfN_CFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bKfN.CF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bKfN.CF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dataUsers' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dwelRep' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'reservations' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'dataUsers' => 'App\\Repository\\UsersRepository',
            'doctrine' => '?',
            'dwelRep' => 'App\\Repository\\DwellingRepository',
            'paginator' => '?',
            'reservations' => 'App\\Repository\\ReservationRepository',
            'security' => '?',
        ]);
    }
}
