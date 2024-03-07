<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBackupOriginalModulesService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\Upgrade\Steps\BackupOriginalModules' autowired service.
     *
     * @return \App\Install\Service\Upgrade\Steps\BackupOriginalModules
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'UpgradeStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'Steps'.\DIRECTORY_SEPARATOR.'BackupOriginalModules.php';

        $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\BackupOriginalModules'] = function () use ($container) {
            return new \App\Install\Service\Upgrade\Steps\BackupOriginalModules(($container->privates['App\\Install\\Service\\Upgrade\\UpgradePackageHandler'] ?? $container->load('getUpgradePackageHandlerService')));
        };

        return $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\BackupOriginalModules']();
    }
}
