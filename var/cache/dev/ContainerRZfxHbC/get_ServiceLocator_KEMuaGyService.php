<?php

namespace ContainerRZfxHbC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KEMuaGyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KEMuaGy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KEMuaGy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'doctrine' => '?',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
            'security' => '?',
        ]);
    }
}
