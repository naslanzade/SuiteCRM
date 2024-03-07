<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppListStringsItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Languages\DataProvider\AppListStringsItemDataProvider' shared autowired service.
     *
     * @return \App\Languages\DataProvider\AppListStringsItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Languages'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'AppListStringsItemDataProvider.php';

        return $container->privates['App\\Languages\\DataProvider\\AppListStringsItemDataProvider'] = new \App\Languages\DataProvider\AppListStringsItemDataProvider(($container->privates['App\\Languages\\LegacyHandler\\AppListStringsHandler'] ?? $container->load('getAppListStringsHandlerService')));
    }
}
