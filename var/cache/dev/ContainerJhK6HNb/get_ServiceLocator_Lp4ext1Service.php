<?php

namespace ContainerJhK6HNb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lp4ext1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lp4ext1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lp4ext1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendarDate' => ['privates', 'App\\Data\\Calendar', 'getCalendarService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'dwelRep' => ['privates', 'App\\Repository\\DwellingRepository', 'getDwellingRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'calendarDate' => 'App\\Data\\Calendar',
            'doctrine' => '?',
            'dwelRep' => 'App\\Repository\\DwellingRepository',
            'security' => '?',
        ]);
    }
}
