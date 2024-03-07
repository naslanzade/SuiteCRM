<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLegacyDisableNumFormatFieldDefinitionMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\FieldDefinitions\LegacyHandler\LegacyDisableNumFormatFieldDefinitionMapper' shared autowired service.
     *
     * @return \App\FieldDefinitions\LegacyHandler\LegacyDisableNumFormatFieldDefinitionMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'FieldDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'FieldDefinitionMapperInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'FieldDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'LegacyDisableNumFormatFieldDefinitionMapper.php';

        return $container->privates['App\\FieldDefinitions\\LegacyHandler\\LegacyDisableNumFormatFieldDefinitionMapper'] = new \App\FieldDefinitions\LegacyHandler\LegacyDisableNumFormatFieldDefinitionMapper(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()));
    }
}
