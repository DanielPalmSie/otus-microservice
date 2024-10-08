<?php

namespace ContainerWmYj4Pp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoadFeedDataCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\LoadFeedDataCommand' shared autowired service.
     *
     * @return \App\Command\LoadFeedDataCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/LoadFeedDataCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Service/DatabaseService.php';

        $container->privates['App\\Command\\LoadFeedDataCommand'] = $instance = new \App\Command\LoadFeedDataCommand(($container->privates['App\\Service\\DatabaseService'] ?? ($container->privates['App\\Service\\DatabaseService'] = new \App\Service\DatabaseService($container->getEnv('resolve:DATABASE_URL')))));

        $instance->setName('app:load-feed-data');

        return $instance;
    }
}
