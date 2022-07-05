<?php

namespace Container0D1wUix;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera86c3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc73f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc871f = [
        
    ];

    public function getConnection()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getConnection', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getMetadataFactory', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getExpressionBuilder', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'beginTransaction', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getCache', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getCache();
    }

    public function transactional($func)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'transactional', array('func' => $func), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'wrapInTransaction', array('func' => $func), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'commit', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->commit();
    }

    public function rollback()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'rollback', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getClassMetadata', array('className' => $className), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'createQuery', array('dql' => $dql), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'createNamedQuery', array('name' => $name), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'createQueryBuilder', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'flush', array('entity' => $entity), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'clear', array('entityName' => $entityName), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->clear($entityName);
    }

    public function close()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'close', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->close();
    }

    public function persist($entity)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'persist', array('entity' => $entity), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'remove', array('entity' => $entity), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'refresh', array('entity' => $entity), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'detach', array('entity' => $entity), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'merge', array('entity' => $entity), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getRepository', array('entityName' => $entityName), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'contains', array('entity' => $entity), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getEventManager', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getConfiguration', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'isOpen', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getUnitOfWork', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getProxyFactory', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'initializeObject', array('obj' => $obj), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'getFilters', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'isFiltersStateClean', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'hasFilters', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return $this->valueHoldera86c3->hasFilters();
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

        $instance->initializercc73f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera86c3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera86c3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera86c3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, '__get', ['name' => $name], $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        if (isset(self::$publicPropertiesc871f[$name])) {
            return $this->valueHoldera86c3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera86c3;

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

        $targetObject = $this->valueHoldera86c3;
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
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera86c3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera86c3;
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
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, '__isset', array('name' => $name), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera86c3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera86c3;
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
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, '__unset', array('name' => $name), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera86c3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera86c3;
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
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, '__clone', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        $this->valueHoldera86c3 = clone $this->valueHoldera86c3;
    }

    public function __sleep()
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, '__sleep', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        return array('valueHoldera86c3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc73f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc73f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'initializeProxy', array(), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera86c3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera86c3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
