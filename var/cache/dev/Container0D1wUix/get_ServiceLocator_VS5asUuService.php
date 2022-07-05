<?php

namespace Container0D1wUix;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VS5asUuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VS5asUu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VS5asUu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dwelRep' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'reservation' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'dwelRep' => 'App\\Repository\\DwellingRepository',
            'reservation' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
