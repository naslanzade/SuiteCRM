<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShivasVersioning_Command_StatusService extends App_KernelProdContainer
{
    /*
     * Gets the private 'shivas_versioning.command.status' shared service.
     *
     * @return \Shivas\VersioningBundle\Command\StatusCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'StatusCommand.php';

        $container->privates['shivas_versioning.command.status'] = $instance = new \Shivas\VersioningBundle\Command\StatusCommand(($container->privates['shivas_versioning.manager'] ?? $container->load('getShivasVersioning_ManagerService')));

        $instance->setName('app:version:status');

        return $instance;
    }
}