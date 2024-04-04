<?php

namespace ContainerGa9ibIC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JDywqWmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JDywqWm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JDywqWm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationactiviteRepository' => ['privates', 'App\\Repository\\ReservationactiviteRepository', 'getReservationactiviteRepositoryService', true],
        ], [
            'reservationactiviteRepository' => 'App\\Repository\\ReservationactiviteRepository',
        ]);
    }
}
