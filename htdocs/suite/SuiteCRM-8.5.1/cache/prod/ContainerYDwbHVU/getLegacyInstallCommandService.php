<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLegacyInstallCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Command\LegacyInstallCommand' shared autowired service.
     *
     * @return \App\Install\Command\LegacyInstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'BaseCommand.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'BaseStepExecutorCommand.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LegacyInstallCommand.php';

        $container->privates['App\\Install\\Command\\LegacyInstallCommand'] = $instance = new \App\Install\Command\LegacyInstallCommand(($container->privates['App\\Install\\LegacyHandler\\InstallHandler'] ?? $container->getInstallHandlerService()), ($container->privates['App\\Install\\Service\\Installation\\InstallStepHandler'] ?? $container->load('getInstallStepHandlerService')));

        $instance->setDefaultSessionName('PHPSESSID');
        $instance->setLegacySessionName('LEGACYSESSID');
        $instance->setSession(($container->services['session'] ?? $container->getSessionService()));
        $instance->setAppStringsHandler(($container->privates['App\\Languages\\LegacyHandler\\AppStringsHandler'] ?? $container->load('getAppStringsHandlerService')));
        $instance->setName('suitecrm:app:install');

        return $instance;
    }
}
