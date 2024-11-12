<?php

namespace Container8rIY355;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1vjP6kuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1vjP6ku' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1vjP6ku'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'coinRepository' => ['privates', 'App\\Repository\\CoinRepository', 'getCoinRepositoryService', true],
        ], [
            'coinRepository' => 'App\\Repository\\CoinRepository',
        ]);
    }
}