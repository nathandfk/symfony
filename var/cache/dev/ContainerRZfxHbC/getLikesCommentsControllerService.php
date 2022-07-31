<?php

namespace ContainerRZfxHbC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLikesCommentsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LikesCommentsController' shared autowired service.
     *
     * @return \App\Controller\LikesCommentsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LikesCommentsController.php';

        $container->services['App\\Controller\\LikesCommentsController'] = $instance = new \App\Controller\LikesCommentsController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LikesCommentsController', $container));

        return $instance;
    }
}