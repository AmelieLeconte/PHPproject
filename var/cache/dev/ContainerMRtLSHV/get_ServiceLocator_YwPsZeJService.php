<?php

namespace ContainerMRtLSHV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YwPsZeJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YwPsZeJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YwPsZeJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'chemin_de_traverse' => ['privates', '.errored..service_locator.YwPsZeJ.App\\Entity\\CheminDeTraverse', NULL, 'Cannot autowire service ".service_locator.YwPsZeJ": it needs an instance of "App\\Entity\\CheminDeTraverse" but this type has been excluded in "config/services.yaml".'],
            'coin' => ['privates', '.errored..service_locator.YwPsZeJ.App\\Entity\\Coin', NULL, 'Cannot autowire service ".service_locator.YwPsZeJ": it needs an instance of "App\\Entity\\Coin" but this type has been excluded in "config/services.yaml".'],
            'doctrine' => ['privates', '.errored.A31iMcm', NULL, 'Cannot determine controller argument for "App\\Controller\\CheminDeTraverseController::coinlistAction()": the $doctrine argument is type-hinted with the non-existent class or interface: "App\\Controller\\ManagerRegistry". Did you forget to add a use statement?'],
        ], [
            'chemin_de_traverse' => 'App\\Entity\\CheminDeTraverse',
            'coin' => 'App\\Entity\\Coin',
            'doctrine' => '?',
        ]);
    }
}