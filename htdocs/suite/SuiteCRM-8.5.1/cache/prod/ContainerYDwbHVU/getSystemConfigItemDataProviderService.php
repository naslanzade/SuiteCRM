<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSystemConfigItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\SystemConfig\DataProvider\SystemConfigItemDataProvider' shared autowired service.
     *
     * @return \App\SystemConfig\DataProvider\SystemConfigItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'SystemConfig'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'SystemConfigItemDataProvider.php';

        return $container->privates['App\\SystemConfig\\DataProvider\\SystemConfigItemDataProvider'] = new \App\SystemConfig\DataProvider\SystemConfigItemDataProvider(($container->services['app.system-configs'] ?? $container->getApp_SystemconfigsService()));
    }
}
