<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_AuthService extends App_KernelProdContainer
{
    /*
     * Gets the public 'monolog.logger.auth' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['monolog.logger.auth'] = $instance = new \Symfony\Bridge\Monolog\Logger('auth');

        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        $instance->pushHandler(($container->privates['monolog.handler.auth'] ?? $container->load('getMonolog_Handler_AuthService')));

        return $instance;
    }
}
