<?php

namespace Container5xccn9A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y5N1en4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y5N1en4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y5N1en4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cart' => ['privates', 'App\\Model\\Cart', 'getCartService', true],
        ], [
            'cart' => 'App\\Model\\Cart',
        ]);
    }
}