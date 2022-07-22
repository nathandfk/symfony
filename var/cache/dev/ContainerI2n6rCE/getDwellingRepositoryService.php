<?php

namespace ContainerI2n6rCE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDwellingRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\DwellingRepository' shared autowired service.
     *
     * @return \App\Repository\DwellingRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/DwellingRepository.php';

        return $container->privates['App\\Repository\\DwellingRepository'] = new \App\Repository\DwellingRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['App\\Repository\\CountryRepository'] ?? $container->load('getCountryRepositoryService')), ($container->privates['App\\Repository\\PostsRepository'] ?? $container->load('getPostsRepositoryService')), ($container->privates['App\\Repository\\ReservationRepository'] ?? $container->load('getReservationRepositoryService')), ($container->privates['App\\Repository\\DwellingMetaRepository'] ?? $container->load('getDwellingMetaRepositoryService')), ($container->privates['App\\Repository\\UsersRepository'] ?? $container->load('getUsersRepositoryService')), ($container->privates['App\\Repository\\PostMetaRepository'] ?? $container->load('getPostMetaRepositoryService')));
    }
}
