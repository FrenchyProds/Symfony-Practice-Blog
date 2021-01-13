<?php

namespace ContainerDx8gFFe;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder07096 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerec6be = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0908d = [
        
    ];

    public function getConnection()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getConnection', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getMetadataFactory', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getExpressionBuilder', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'beginTransaction', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getCache', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getCache();
    }

    public function transactional($func)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'transactional', array('func' => $func), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->transactional($func);
    }

    public function commit()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'commit', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->commit();
    }

    public function rollback()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'rollback', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getClassMetadata', array('className' => $className), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'createQuery', array('dql' => $dql), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'createNamedQuery', array('name' => $name), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'createQueryBuilder', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'flush', array('entity' => $entity), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'clear', array('entityName' => $entityName), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->clear($entityName);
    }

    public function close()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'close', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->close();
    }

    public function persist($entity)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'persist', array('entity' => $entity), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'remove', array('entity' => $entity), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'refresh', array('entity' => $entity), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'detach', array('entity' => $entity), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'merge', array('entity' => $entity), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getRepository', array('entityName' => $entityName), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'contains', array('entity' => $entity), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getEventManager', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getConfiguration', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'isOpen', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getUnitOfWork', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getProxyFactory', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'initializeObject', array('obj' => $obj), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'getFilters', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'isFiltersStateClean', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'hasFilters', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return $this->valueHolder07096->hasFilters();
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

        $instance->initializerec6be = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder07096) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder07096 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder07096->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, '__get', ['name' => $name], $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        if (isset(self::$publicProperties0908d[$name])) {
            return $this->valueHolder07096->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07096;

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

        $targetObject = $this->valueHolder07096;
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
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07096;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder07096;
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
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, '__isset', array('name' => $name), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07096;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder07096;
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
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, '__unset', array('name' => $name), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07096;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder07096;
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
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, '__clone', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        $this->valueHolder07096 = clone $this->valueHolder07096;
    }

    public function __sleep()
    {
        $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, '__sleep', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;

        return array('valueHolder07096');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerec6be = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerec6be;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerec6be && ($this->initializerec6be->__invoke($valueHolder07096, $this, 'initializeProxy', array(), $this->initializerec6be) || 1) && $this->valueHolder07096 = $valueHolder07096;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder07096;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder07096;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
