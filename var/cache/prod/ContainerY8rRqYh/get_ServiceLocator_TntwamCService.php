<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TntwamCService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.tntwamC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tntwamC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendarDate' => ['privates', 'App\\Data\\Calendar', 'getCalendarService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'reservations' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'calendarDate' => 'App\\Data\\Calendar',
            'doctrine' => '?',
            'reservations' => 'App\\Repository\\ReservationRepository',
            'security' => '?',
        ]);
    }
}
