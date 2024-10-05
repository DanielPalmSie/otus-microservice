<?php

namespace ContainerWmYj4Pp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AuthorizationCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';

        return $container->privates['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['debug.security.access.decision_manager'] ?? $container->load('getDebug_Security_Access_DecisionManagerService')), false, false);
    }
}
