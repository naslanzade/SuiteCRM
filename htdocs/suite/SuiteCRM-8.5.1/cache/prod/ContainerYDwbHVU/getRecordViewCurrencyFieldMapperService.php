<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordViewCurrencyFieldMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\ViewDefinitions\LegacyHandler\RecordView\RecordViewCurrencyFieldMapper' shared autowired service.
     *
     * @return \App\ViewDefinitions\LegacyHandler\RecordView\RecordViewCurrencyFieldMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'ViewDefinitionMapperInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'RecordView'.\DIRECTORY_SEPARATOR.'RecordViewCurrencyFieldMapper.php';

        return $container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordViewCurrencyFieldMapper'] = new \App\ViewDefinitions\LegacyHandler\RecordView\RecordViewCurrencyFieldMapper(($container->privates['App\\FieldDefinitions\\LegacyHandler\\GroupedFieldDefinitionMapper'] ?? $container->load('getGroupedFieldDefinitionMapperService')), $container->parameters['record.fields.currency_fields_type_map']);
    }
}
