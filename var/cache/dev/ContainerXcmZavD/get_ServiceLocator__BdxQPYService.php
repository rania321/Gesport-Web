<?php

namespace ContainerXcmZavD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__BdxQPYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..BdxQPY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..BdxQPY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationactivite' => ['privates', '.errored..service_locator..BdxQPY.App\\Entity\\Reservationactivite', NULL, 'Cannot autowire service ".service_locator..BdxQPY": it references class "App\\Entity\\Reservationactivite" but no such service exists.'],
        ], [
            'reservationactivite' => 'App\\Entity\\Reservationactivite',
        ]);
    }
}
