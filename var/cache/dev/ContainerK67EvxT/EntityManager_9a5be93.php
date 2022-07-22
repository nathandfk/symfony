<?php

namespace ContainerK67EvxT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaaabd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46948 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1ec6f = [
        
    ];

    public function getConnection()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getConnection', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getMetadataFactory', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getExpressionBuilder', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'beginTransaction', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getCache', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'transactional', array('func' => $func), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'commit', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->commit();
    }

    public function rollback()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'rollback', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getClassMetadata', array('className' => $className), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'createQuery', array('dql' => $dql), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'createNamedQuery', array('name' => $name), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'createQueryBuilder', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'flush', array('entity' => $entity), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'clear', array('entityName' => $entityName), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->clear($entityName);
    }

    public function close()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'close', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->close();
    }

    public function persist($entity)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'persist', array('entity' => $entity), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'remove', array('entity' => $entity), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'refresh', array('entity' => $entity), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'detach', array('entity' => $entity), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'merge', array('entity' => $entity), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'contains', array('entity' => $entity), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getEventManager', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getConfiguration', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'isOpen', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getUnitOfWork', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getProxyFactory', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'initializeObject', array('obj' => $obj), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'getFilters', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'isFiltersStateClean', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'hasFilters', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return $this->valueHolderaaabd->hasFilters();
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

        $instance->initializer46948 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaaabd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaaabd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaaabd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, '__get', ['name' => $name], $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        if (isset(self::$publicProperties1ec6f[$name])) {
            return $this->valueHolderaaabd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaabd;

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

        $targetObject = $this->valueHolderaaabd;
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
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaabd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaaabd;
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
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, '__isset', array('name' => $name), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaabd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaaabd;
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
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, '__unset', array('name' => $name), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaabd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaaabd;
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
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, '__clone', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        $this->valueHolderaaabd = clone $this->valueHolderaaabd;
    }

    public function __sleep()
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, '__sleep', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        return array('valueHolderaaabd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46948 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46948;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'initializeProxy', array(), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaaabd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaaabd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
