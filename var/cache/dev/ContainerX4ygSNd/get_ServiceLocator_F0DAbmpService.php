<?php

namespace ContainerX4ygSNd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F0DAbmpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f0DAbmp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f0DAbmp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'postRep' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'doctrine' => '?',
            'paginator' => '?',
            'postRep' => 'App\\Repository\\PostsRepository',
            'security' => '?',
        ]);
    }
}
