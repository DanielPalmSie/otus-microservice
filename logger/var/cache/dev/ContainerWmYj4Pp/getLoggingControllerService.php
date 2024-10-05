<?php

namespace ContainerWmYj4Pp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoggingControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LoggingController' shared autowired service.
     *
     * @return \App\Controller\LoggingController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LoggingController.php';

        $container->services['App\\Controller\\LoggingController'] = $instance = new \App\Controller\LoggingController();

        $instance->setContainer(($container->privates['.service_locator.SDLTfYt'] ?? $container->load('get_ServiceLocator_SDLTfYtService'))->withContext('App\\Controller\\LoggingController', $container));

        return $instance;
    }
}
