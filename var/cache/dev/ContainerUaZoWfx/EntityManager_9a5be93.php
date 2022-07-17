<?php

namespace ContainerUaZoWfx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere1588 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55ee5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3b846 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getConnection', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getMetadataFactory', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getExpressionBuilder', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'beginTransaction', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getCache', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'transactional', array('func' => $func), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'commit', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->commit();
    }

    public function rollback()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'rollback', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getClassMetadata', array('className' => $className), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'createQuery', array('dql' => $dql), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'createNamedQuery', array('name' => $name), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'createQueryBuilder', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'flush', array('entity' => $entity), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'clear', array('entityName' => $entityName), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->clear($entityName);
    }

    public function close()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'close', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->close();
    }

    public function persist($entity)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'persist', array('entity' => $entity), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'remove', array('entity' => $entity), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'refresh', array('entity' => $entity), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'detach', array('entity' => $entity), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'merge', array('entity' => $entity), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'contains', array('entity' => $entity), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getEventManager', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getConfiguration', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'isOpen', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getUnitOfWork', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getProxyFactory', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'initializeObject', array('obj' => $obj), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'getFilters', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'isFiltersStateClean', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'hasFilters', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return $this->valueHoldere1588->hasFilters();
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

        $instance->initializer55ee5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere1588) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere1588 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere1588->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, '__get', ['name' => $name], $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        if (isset(self::$publicProperties3b846[$name])) {
            return $this->valueHoldere1588->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1588;

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

        $targetObject = $this->valueHoldere1588;
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
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1588;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere1588;
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
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, '__isset', array('name' => $name), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1588;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere1588;
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
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, '__unset', array('name' => $name), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1588;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere1588;
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
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, '__clone', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        $this->valueHoldere1588 = clone $this->valueHoldere1588;
    }

    public function __sleep()
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, '__sleep', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        return array('valueHoldere1588');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55ee5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55ee5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'initializeProxy', array(), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1588;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1588;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
