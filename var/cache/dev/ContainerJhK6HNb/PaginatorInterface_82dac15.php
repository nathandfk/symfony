<?php

namespace ContainerJhK6HNb;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        if ($this->valueHoldera86c3 === $returnValue = $this->valueHoldera86c3->paginate($target, $page, $limit, $options)) {
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

        $instance->initializercc73f = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera86c3) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera86c3 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializercc73f && ($this->initializercc73f->__invoke($valueHoldera86c3, $this, '__get', ['name' => $name], $this->initializercc73f) || 1) && $this->valueHoldera86c3 = $valueHoldera86c3;

        if (isset(self::$publicPropertiesc871f[$name])) {
            return $this->valueHoldera86c3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
