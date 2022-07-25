<?php

namespace ContainerAudYYUs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q5QT0m4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q5QT0m4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q5QT0m4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendarDate' => ['privates', 'App\\Data\\Calendar', 'getCalendarService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dwelRep' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'reservRep' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'calendarDate' => 'App\\Data\\Calendar',
            'doctrine' => '?',
            'dwelRep' => 'App\\Repository\\DwellingRepository',
            'reservRep' => 'App\\Repository\\ReservationRepository',
            'security' => '?',
        ]);
    }
}
