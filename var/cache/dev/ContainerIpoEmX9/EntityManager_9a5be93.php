<?php

namespace ContainerIpoEmX9;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd738 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf09e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e83b = [
        
    ];

    public function getConnection()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getConnection', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getMetadataFactory', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getExpressionBuilder', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'beginTransaction', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getCache', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'transactional', array('func' => $func), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'commit', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->commit();
    }

    public function rollback()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'rollback', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getClassMetadata', array('className' => $className), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'createQuery', array('dql' => $dql), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'createNamedQuery', array('name' => $name), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'createQueryBuilder', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'flush', array('entity' => $entity), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'clear', array('entityName' => $entityName), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->clear($entityName);
    }

    public function close()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'close', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->close();
    }

    public function persist($entity)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'persist', array('entity' => $entity), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'remove', array('entity' => $entity), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'detach', array('entity' => $entity), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'merge', array('entity' => $entity), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'contains', array('entity' => $entity), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getEventManager', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getConfiguration', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'isOpen', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getUnitOfWork', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getProxyFactory', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'initializeObject', array('obj' => $obj), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'getFilters', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'isFiltersStateClean', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'hasFilters', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return $this->valueHolderfd738->hasFilters();
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

        $instance->initializerf09e2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderfd738) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd738 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd738->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, '__get', ['name' => $name], $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        if (isset(self::$publicProperties5e83b[$name])) {
            return $this->valueHolderfd738->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd738;

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

        $targetObject = $this->valueHolderfd738;
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
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd738;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd738;
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
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, '__isset', array('name' => $name), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd738;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd738;
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
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, '__unset', array('name' => $name), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd738;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd738;
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
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, '__clone', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        $this->valueHolderfd738 = clone $this->valueHolderfd738;
    }

    public function __sleep()
    {
        $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, '__sleep', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;

        return array('valueHolderfd738');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializerf09e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf09e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf09e2 && ($this->initializerf09e2->__invoke($valueHolderfd738, $this, 'initializeProxy', array(), $this->initializerf09e2) || 1) && $this->valueHolderfd738 = $valueHolderfd738;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd738;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd738;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
