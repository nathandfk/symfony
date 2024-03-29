<?php

namespace ContainerJhK6HNb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_User_Provider_Concrete_FromDatabaseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.user.provider.concrete.from_database' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Security/User/EntityUserProvider.php';

        return $container->privates['security.user.provider.concrete.from_database'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($container->services['doctrine'] ?? $container->getDoctrineService()), 'App\\Entity\\Users', 'email', NULL);
    }
}
