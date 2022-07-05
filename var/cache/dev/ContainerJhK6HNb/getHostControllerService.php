<?php

namespace ContainerJhK6HNb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHostControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HostController' shared autowired service.
     *
     * @return \App\Controller\HostController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HostController.php';

        $container->services['App\\Controller\\HostController'] = $instance = new \App\Controller\HostController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\HostController', $container));

        return $instance;
    }
}
