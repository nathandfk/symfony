<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostMetaRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PostMetaRepository' shared autowired service.
     *
     * @return \App\Repository\PostMetaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PostMetaRepository'] = new \App\Repository\PostMetaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}