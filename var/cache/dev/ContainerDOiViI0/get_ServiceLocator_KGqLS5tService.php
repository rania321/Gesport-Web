<?php

namespace ContainerDOiViI0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KGqLS5tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kGqLS5t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kGqLS5t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activite' => ['privates', '.errored..service_locator.kGqLS5t.App\\Entity\\Activite', NULL, 'Cannot autowire service ".service_locator.kGqLS5t": it references class "App\\Entity\\Activite" but no such service exists.'],
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
        ], [
            'activite' => 'App\\Entity\\Activite',
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
        ]);
    }
}
