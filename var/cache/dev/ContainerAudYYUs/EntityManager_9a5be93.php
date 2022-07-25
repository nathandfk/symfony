<?php

namespace ContainerAudYYUs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb348b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6ff0f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb508d = [
        
    ];

    public function getConnection()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getConnection', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getMetadataFactory', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getExpressionBuilder', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'beginTransaction', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getCache', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'transactional', array('func' => $func), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'commit', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->commit();
    }

    public function rollback()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'rollback', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getClassMetadata', array('className' => $className), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'createQuery', array('dql' => $dql), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'createNamedQuery', array('name' => $name), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'createQueryBuilder', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'flush', array('entity' => $entity), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'clear', array('entityName' => $entityName), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->clear($entityName);
    }

    public function close()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'close', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->close();
    }

    public function persist($entity)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'persist', array('entity' => $entity), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'remove', array('entity' => $entity), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'refresh', array('entity' => $entity), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'detach', array('entity' => $entity), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'merge', array('entity' => $entity), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'contains', array('entity' => $entity), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getEventManager', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getConfiguration', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'isOpen', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getUnitOfWork', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getProxyFactory', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'initializeObject', array('obj' => $obj), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'getFilters', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'isFiltersStateClean', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'hasFilters', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return $this->valueHolderb348b->hasFilters();
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

        $instance->initializer6ff0f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb348b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb348b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb348b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, '__get', ['name' => $name], $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        if (isset(self::$publicPropertiesb508d[$name])) {
            return $this->valueHolderb348b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb348b;

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

        $targetObject = $this->valueHolderb348b;
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
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb348b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb348b;
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
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, '__isset', array('name' => $name), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb348b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb348b;
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
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, '__unset', array('name' => $name), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb348b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb348b;
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
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, '__clone', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        $this->valueHolderb348b = clone $this->valueHolderb348b;
    }

    public function __sleep()
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, '__sleep', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        return array('valueHolderb348b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6ff0f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6ff0f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'initializeProxy', array(), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb348b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb348b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
