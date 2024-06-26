<?php

namespace ContainerDOiViI0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DX5IRBdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DX5IRBd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DX5IRBd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activite' => ['privates', '.errored..service_locator.DX5IRBd.App\\Entity\\Activite', NULL, 'Cannot autowire service ".service_locator.DX5IRBd": it references class "App\\Entity\\Activite" but no such service exists.'],
        ], [
            'activite' => 'App\\Entity\\Activite',
        ]);
    }
}
