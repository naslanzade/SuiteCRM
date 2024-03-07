<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDismissAllAlertsRecordThreadListActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\RecordThreadListActions\DismissAllAlertsRecordThreadListAction' shared autowired service.
     *
     * @return \App\Process\Service\RecordThreadListActions\DismissAllAlertsRecordThreadListAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'RecordThreadListActions'.\DIRECTORY_SEPARATOR.'DismissAllAlertsRecordThreadListAction.php';

        return $container->privates['App\\Process\\Service\\RecordThreadListActions\\DismissAllAlertsRecordThreadListAction'] = new \App\Process\Service\RecordThreadListActions\DismissAllAlertsRecordThreadListAction(($container->privates['App\\Data\\LegacyHandler\\AlertHandler'] ?? $container->load('getAlertHandlerService')));
    }
}