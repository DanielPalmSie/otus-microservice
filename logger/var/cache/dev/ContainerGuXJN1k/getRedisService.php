<?php

namespace ContainerGuXJN1k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRedisService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'redis' shared autowired service.
     *
     * @return \Redis
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['redis'] = $instance = new \Redis();

        $instance->connect($container->getEnv('REDIS_HOST'));

        return $instance;
    }
}
