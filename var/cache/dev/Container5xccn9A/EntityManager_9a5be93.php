<?php

namespace Container5xccn9A;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8aeb5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8c9e8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd8a70 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getConnection', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getMetadataFactory', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getExpressionBuilder', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'beginTransaction', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getCache', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'transactional', array('func' => $func), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'commit', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->commit();
    }

    public function rollback()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'rollback', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getClassMetadata', array('className' => $className), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'createQuery', array('dql' => $dql), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'createNamedQuery', array('name' => $name), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'createQueryBuilder', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'flush', array('entity' => $entity), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'clear', array('entityName' => $entityName), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->clear($entityName);
    }

    public function close()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'close', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->close();
    }

    public function persist($entity)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'persist', array('entity' => $entity), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'remove', array('entity' => $entity), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'detach', array('entity' => $entity), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'merge', array('entity' => $entity), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'contains', array('entity' => $entity), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getEventManager', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getConfiguration', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'isOpen', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getUnitOfWork', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getProxyFactory', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'initializeObject', array('obj' => $obj), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'getFilters', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'isFiltersStateClean', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'hasFilters', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return $this->valueHolder8aeb5->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8c9e8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder8aeb5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8aeb5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8aeb5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, '__get', ['name' => $name], $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        if (isset(self::$publicPropertiesd8a70[$name])) {
            return $this->valueHolder8aeb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aeb5;

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

        $targetObject = $this->valueHolder8aeb5;
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
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aeb5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8aeb5;
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
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, '__isset', array('name' => $name), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aeb5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8aeb5;
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
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, '__unset', array('name' => $name), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8aeb5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8aeb5;
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
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, '__clone', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        $this->valueHolder8aeb5 = clone $this->valueHolder8aeb5;
    }

    public function __sleep()
    {
        $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, '__sleep', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;

        return array('valueHolder8aeb5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer8c9e8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8c9e8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8c9e8 && ($this->initializer8c9e8->__invoke($valueHolder8aeb5, $this, 'initializeProxy', array(), $this->initializer8c9e8) || 1) && $this->valueHolder8aeb5 = $valueHolder8aeb5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8aeb5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8aeb5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
