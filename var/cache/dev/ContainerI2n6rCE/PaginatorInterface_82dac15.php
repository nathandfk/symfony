<?php

namespace ContainerI2n6rCE;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        if ($this->valueHolderaaabd === $returnValue = $this->valueHolderaaabd->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer46948 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderaaabd) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderaaabd = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer46948 && ($this->initializer46948->__invoke($valueHolderaaabd, $this, '__get', ['name' => $name], $this->initializer46948) || 1) && $this->valueHolderaaabd = $valueHolderaaabd;

        if (isset(self::$publicProperties1ec6f[$name])) {
            return $this->valueHolderaaabd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
