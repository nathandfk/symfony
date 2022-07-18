<?php

namespace Container3NvzkJy;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        if ($this->valueHoldere1588 === $returnValue = $this->valueHoldere1588->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer55ee5 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere1588) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere1588 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer55ee5 && ($this->initializer55ee5->__invoke($valueHoldere1588, $this, '__get', ['name' => $name], $this->initializer55ee5) || 1) && $this->valueHoldere1588 = $valueHoldere1588;

        if (isset(self::$publicProperties3b846[$name])) {
            return $this->valueHoldere1588->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
