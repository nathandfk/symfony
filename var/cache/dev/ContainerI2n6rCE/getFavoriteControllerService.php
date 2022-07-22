<?php

namespace ContainerI2n6rCE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFavoriteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FavoriteController' shared autowired service.
     *
     * @return \App\Controller\FavoriteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FavoriteController.php';

        $container->services['App\\Controller\\FavoriteController'] = $instance = new \App\Controller\FavoriteController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FavoriteController', $container));

        return $instance;
    }
}
