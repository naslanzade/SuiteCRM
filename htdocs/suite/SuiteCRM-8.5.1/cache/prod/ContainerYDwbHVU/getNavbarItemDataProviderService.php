<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNavbarItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Navbar\DataProvider\NavbarItemDataProvider' shared autowired service.
     *
     * @return \App\Navbar\DataProvider\NavbarItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Navbar'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'NavbarItemDataProvider.php';

        return $container->privates['App\\Navbar\\DataProvider\\NavbarItemDataProvider'] = new \App\Navbar\DataProvider\NavbarItemDataProvider(($container->privates['App\\Navbar\\LegacyHandler\\NavbarHandler'] ?? $container->getNavbarHandlerService()), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}