<?php

namespace ContainerX4ygSNd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EBE7AIrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eBE7AIr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eBE7AIr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}