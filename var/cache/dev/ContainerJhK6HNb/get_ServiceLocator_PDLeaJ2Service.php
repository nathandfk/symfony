<?php

namespace ContainerJhK6HNb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PDLeaJ2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pDLeaJ2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pDLeaJ2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dwelRep' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'reservation' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'doctrine' => '?',
            'dwelRep' => 'App\\Repository\\DwellingRepository',
            'reservation' => 'App\\Repository\\ReservationRepository',
            'security' => '?',
        ]);
    }
}