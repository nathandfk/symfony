<?php

namespace ContainerY8rRqYh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataSiteService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\DataSite' shared autowired service.
     *
     * @return \App\Data\DataSite
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Data\\DataSite'] = new \App\Data\DataSite();
    }
}