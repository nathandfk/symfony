<?php

namespace ContainerAudYYUs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Data\Calendar' shared autowired service.
     *
     * @return \App\Data\Calendar
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Data/Calendar.php';

        return $container->privates['App\\Data\\Calendar'] = new \App\Data\Calendar();
    }
}
