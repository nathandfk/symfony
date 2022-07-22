<?php

namespace ContainerI2n6rCE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataSiteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Data\DataSite' shared autowired service.
     *
     * @return \App\Data\DataSite
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Data/DataSite.php';

        return $container->privates['App\\Data\\DataSite'] = new \App\Data\DataSite();
    }
}
