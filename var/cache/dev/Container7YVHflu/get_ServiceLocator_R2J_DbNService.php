<?php

namespace Container7YVHflu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R2J_DbNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r2J.DbN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r2J.DbN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ActiviteController::delete' => ['privates', '.service_locator.OctoH5o', 'get_ServiceLocator_OctoH5oService', true],
            'App\\Controller\\ActiviteController::edit' => ['privates', '.service_locator.OctoH5o', 'get_ServiceLocator_OctoH5oService', true],
            'App\\Controller\\ActiviteController::index' => ['privates', '.service_locator.h..bsSR', 'get_ServiceLocator_H__BsSRService', true],
            'App\\Controller\\ActiviteController::indexBack' => ['privates', '.service_locator.h..bsSR', 'get_ServiceLocator_H__BsSRService', true],
            'App\\Controller\\ActiviteController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ActiviteController::reserv' => ['privates', '.service_locator.DX5IRBd', 'get_ServiceLocator_DX5IRBdService', true],
            'App\\Controller\\ActiviteController::show' => ['privates', '.service_locator.DX5IRBd', 'get_ServiceLocator_DX5IRBdService', true],
            'App\\Controller\\ReservationactiviteController::delete' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController::deleteBack' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController::edit' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController::editBack' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController::generatePDF' => ['privates', '.service_locator..BdxQPY', 'get_ServiceLocator__BdxQPYService', true],
            'App\\Controller\\ReservationactiviteController::index' => ['privates', '.service_locator.JDywqWm', 'get_ServiceLocator_JDywqWmService', true],
            'App\\Controller\\ReservationactiviteController::indexBack' => ['privates', '.service_locator.JDywqWm', 'get_ServiceLocator_JDywqWmService', true],
            'App\\Controller\\ReservationactiviteController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationactiviteController::show' => ['privates', '.service_locator..BdxQPY', 'get_ServiceLocator__BdxQPYService', true],
            'App\\Controller\\ReservationactiviteController::showBack' => ['privates', '.service_locator..BdxQPY', 'get_ServiceLocator__BdxQPYService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ActiviteController:delete' => ['privates', '.service_locator.OctoH5o', 'get_ServiceLocator_OctoH5oService', true],
            'App\\Controller\\ActiviteController:edit' => ['privates', '.service_locator.OctoH5o', 'get_ServiceLocator_OctoH5oService', true],
            'App\\Controller\\ActiviteController:index' => ['privates', '.service_locator.h..bsSR', 'get_ServiceLocator_H__BsSRService', true],
            'App\\Controller\\ActiviteController:indexBack' => ['privates', '.service_locator.h..bsSR', 'get_ServiceLocator_H__BsSRService', true],
            'App\\Controller\\ActiviteController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ActiviteController:reserv' => ['privates', '.service_locator.DX5IRBd', 'get_ServiceLocator_DX5IRBdService', true],
            'App\\Controller\\ActiviteController:show' => ['privates', '.service_locator.DX5IRBd', 'get_ServiceLocator_DX5IRBdService', true],
            'App\\Controller\\ReservationactiviteController:delete' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController:deleteBack' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController:edit' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController:editBack' => ['privates', '.service_locator.H3L_sti', 'get_ServiceLocator_H3LStiService', true],
            'App\\Controller\\ReservationactiviteController:generatePDF' => ['privates', '.service_locator..BdxQPY', 'get_ServiceLocator__BdxQPYService', true],
            'App\\Controller\\ReservationactiviteController:index' => ['privates', '.service_locator.JDywqWm', 'get_ServiceLocator_JDywqWmService', true],
            'App\\Controller\\ReservationactiviteController:indexBack' => ['privates', '.service_locator.JDywqWm', 'get_ServiceLocator_JDywqWmService', true],
            'App\\Controller\\ReservationactiviteController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationactiviteController:show' => ['privates', '.service_locator..BdxQPY', 'get_ServiceLocator__BdxQPYService', true],
            'App\\Controller\\ReservationactiviteController:showBack' => ['privates', '.service_locator..BdxQPY', 'get_ServiceLocator__BdxQPYService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ActiviteController::delete' => '?',
            'App\\Controller\\ActiviteController::edit' => '?',
            'App\\Controller\\ActiviteController::index' => '?',
            'App\\Controller\\ActiviteController::indexBack' => '?',
            'App\\Controller\\ActiviteController::new' => '?',
            'App\\Controller\\ActiviteController::reserv' => '?',
            'App\\Controller\\ActiviteController::show' => '?',
            'App\\Controller\\ReservationactiviteController::delete' => '?',
            'App\\Controller\\ReservationactiviteController::deleteBack' => '?',
            'App\\Controller\\ReservationactiviteController::edit' => '?',
            'App\\Controller\\ReservationactiviteController::editBack' => '?',
            'App\\Controller\\ReservationactiviteController::generatePDF' => '?',
            'App\\Controller\\ReservationactiviteController::index' => '?',
            'App\\Controller\\ReservationactiviteController::indexBack' => '?',
            'App\\Controller\\ReservationactiviteController::new' => '?',
            'App\\Controller\\ReservationactiviteController::show' => '?',
            'App\\Controller\\ReservationactiviteController::showBack' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ActiviteController:delete' => '?',
            'App\\Controller\\ActiviteController:edit' => '?',
            'App\\Controller\\ActiviteController:index' => '?',
            'App\\Controller\\ActiviteController:indexBack' => '?',
            'App\\Controller\\ActiviteController:new' => '?',
            'App\\Controller\\ActiviteController:reserv' => '?',
            'App\\Controller\\ActiviteController:show' => '?',
            'App\\Controller\\ReservationactiviteController:delete' => '?',
            'App\\Controller\\ReservationactiviteController:deleteBack' => '?',
            'App\\Controller\\ReservationactiviteController:edit' => '?',
            'App\\Controller\\ReservationactiviteController:editBack' => '?',
            'App\\Controller\\ReservationactiviteController:generatePDF' => '?',
            'App\\Controller\\ReservationactiviteController:index' => '?',
            'App\\Controller\\ReservationactiviteController:indexBack' => '?',
            'App\\Controller\\ReservationactiviteController:new' => '?',
            'App\\Controller\\ReservationactiviteController:show' => '?',
            'App\\Controller\\ReservationactiviteController:showBack' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
