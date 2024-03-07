<?php

namespace ContainerYDwbHVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldAliasMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\ViewDefinitions\Service\FieldAliasMapper' shared autowired service.
     *
     * @return \App\ViewDefinitions\Service\FieldAliasMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'FieldAliasMapper.php';

        return $container->privates['App\\ViewDefinitions\\Service\\FieldAliasMapper'] = new \App\ViewDefinitions\Service\FieldAliasMapper($container->parameters['record.fields.view_metadata_field_alias_map']);
    }
}
