<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5d3CZRVService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.5d3CZRV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5d3CZRV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservRep' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'reservRep' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
