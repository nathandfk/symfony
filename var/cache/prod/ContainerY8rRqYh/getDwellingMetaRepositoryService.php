<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDwellingMetaRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DwellingMetaRepository' shared autowired service.
     *
     * @return \App\Repository\DwellingMetaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DwellingMetaRepository'] = new \App\Repository\DwellingMetaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}