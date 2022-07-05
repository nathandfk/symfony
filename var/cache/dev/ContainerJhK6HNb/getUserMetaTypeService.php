<?php

namespace ContainerJhK6HNb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserMetaTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UserMetaType' shared autowired service.
     *
     * @return \App\Form\UserMetaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserMetaType.php';

        return $container->privates['App\\Form\\UserMetaType'] = new \App\Form\UserMetaType();
    }
}
