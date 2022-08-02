<?php

namespace ContainerX4ygSNd;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        if ($this->valueHolderb348b === $returnValue = $this->valueHolderb348b->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer6ff0f = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderb348b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderb348b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer6ff0f && ($this->initializer6ff0f->__invoke($valueHolderb348b, $this, '__get', ['name' => $name], $this->initializer6ff0f) || 1) && $this->valueHolderb348b = $valueHolderb348b;

        if (isset(self::$publicPropertiesb508d[$name])) {
            return $this->valueHolderb348b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
