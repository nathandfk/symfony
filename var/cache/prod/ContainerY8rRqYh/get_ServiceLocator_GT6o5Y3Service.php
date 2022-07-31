<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GT6o5Y3Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.GT6o5Y3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GT6o5Y3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postsRep' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
        ], [
            'postsRep' => 'App\\Repository\\PostsRepository',
        ]);
    }
}
