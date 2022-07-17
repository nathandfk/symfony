<?php

namespace ContainerUaZoWfx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MessageController' shared autowired service.
     *
     * @return \App\Controller\MessageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MessageController.php';

        $container->services['App\\Controller\\MessageController'] = $instance = new \App\Controller\MessageController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\MessageController', $container));

        return $instance;
    }
}
