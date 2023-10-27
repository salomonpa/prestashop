<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdd83a = null;
    private $initializerf77fc = null;
    private static $publicProperties99988 = [
        
    ];
    public function getConnection()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getConnection', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getMetadataFactory', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getExpressionBuilder', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'beginTransaction', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getCache', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'transactional', array('func' => $func), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'commit', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->commit();
    }
    public function rollback()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'rollback', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getClassMetadata', array('className' => $className), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'createQuery', array('dql' => $dql), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'createNamedQuery', array('name' => $name), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'createQueryBuilder', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'flush', array('entity' => $entity), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'clear', array('entityName' => $entityName), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->clear($entityName);
    }
    public function close()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'close', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->close();
    }
    public function persist($entity)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'persist', array('entity' => $entity), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'remove', array('entity' => $entity), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'refresh', array('entity' => $entity), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'detach', array('entity' => $entity), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'merge', array('entity' => $entity), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'contains', array('entity' => $entity), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getEventManager', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getConfiguration', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'isOpen', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getUnitOfWork', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getProxyFactory', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'initializeObject', array('obj' => $obj), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'getFilters', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'isFiltersStateClean', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'hasFilters', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return $this->valueHolderdd83a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf77fc = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderdd83a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd83a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderdd83a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, '__get', ['name' => $name], $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        if (isset(self::$publicProperties99988[$name])) {
            return $this->valueHolderdd83a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd83a;
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
        $targetObject = $this->valueHolderdd83a;
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
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd83a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdd83a;
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
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, '__isset', array('name' => $name), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd83a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdd83a;
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
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, '__unset', array('name' => $name), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd83a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdd83a;
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
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, '__clone', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        $this->valueHolderdd83a = clone $this->valueHolderdd83a;
    }
    public function __sleep()
    {
        $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, '__sleep', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
        return array('valueHolderdd83a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf77fc = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf77fc;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf77fc && ($this->initializerf77fc->__invoke($valueHolderdd83a, $this, 'initializeProxy', array(), $this->initializerf77fc) || 1) && $this->valueHolderdd83a = $valueHolderdd83a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd83a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd83a;
    }
}
