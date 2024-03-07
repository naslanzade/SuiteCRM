<?php

namespace ContainerYDwbHVU;

include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder36625 = null;
    private $initializerc8c52 = null;
    private static $publicProperties2b69a = [
        
    ];
    public function getConnection()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getConnection', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getMetadataFactory', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getExpressionBuilder', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'beginTransaction', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getCache', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'transactional', array('func' => $func), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'commit', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->commit();
    }
    public function rollback()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'rollback', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getClassMetadata', array('className' => $className), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'createQuery', array('dql' => $dql), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'createNamedQuery', array('name' => $name), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'createQueryBuilder', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'flush', array('entity' => $entity), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'clear', array('entityName' => $entityName), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->clear($entityName);
    }
    public function close()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'close', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->close();
    }
    public function persist($entity)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'persist', array('entity' => $entity), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'remove', array('entity' => $entity), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'refresh', array('entity' => $entity), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'detach', array('entity' => $entity), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'merge', array('entity' => $entity), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'contains', array('entity' => $entity), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getEventManager', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getConfiguration', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'isOpen', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getUnitOfWork', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getProxyFactory', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'initializeObject', array('obj' => $obj), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'getFilters', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'isFiltersStateClean', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'hasFilters', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return $this->valueHolder36625->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc8c52 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder36625) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36625 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder36625->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, '__get', ['name' => $name], $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        if (isset(self::$publicProperties2b69a[$name])) {
            return $this->valueHolder36625->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36625;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder36625;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36625;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder36625;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, '__isset', array('name' => $name), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36625;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder36625;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, '__unset', array('name' => $name), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36625;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder36625;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, '__clone', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        $this->valueHolder36625 = clone $this->valueHolder36625;
    }
    public function __sleep()
    {
        $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, '__sleep', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
        return array('valueHolder36625');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc8c52 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc8c52;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc8c52 && ($this->initializerc8c52->__invoke($valueHolder36625, $this, 'initializeProxy', array(), $this->initializerc8c52) || 1) && $this->valueHolder36625 = $valueHolder36625;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36625;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36625;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
