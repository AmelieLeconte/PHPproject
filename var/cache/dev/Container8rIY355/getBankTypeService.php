<?php

namespace Container8rIY355;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBankTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\BankType' shared autowired service.
     *
     * @return \App\Form\BankType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/BankType.php';

        return $container->privates['App\\Form\\BankType'] = new \App\Form\BankType();
    }
}