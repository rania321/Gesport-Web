<?php

namespace ContainerXcmZavD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GPGtF8vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GPGtF8v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GPGtF8v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.GPGtF8v.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.GPGtF8v": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
