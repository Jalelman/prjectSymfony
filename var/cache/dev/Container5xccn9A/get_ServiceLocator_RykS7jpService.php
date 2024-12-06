<?php

namespace Container5xccn9A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RykS7jpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RykS7jp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RykS7jp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cart' => ['privates', 'App\\Model\\Cart', 'getCartService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cart' => 'App\\Model\\Cart',
            'em' => '?',
        ]);
    }
}
