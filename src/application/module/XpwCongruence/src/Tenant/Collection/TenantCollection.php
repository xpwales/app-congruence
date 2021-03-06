<?php

namespace XpwCongruence\Tenant\DataMapper\Collection;

use Xpwales\Identity\IdentityAware\ObjectStorage\IdentityAwareObjectStorage;
use Xpwales\Identity\IdentityAware\ObjectStorage\IdentityAwareObjectStorageInterface;
use XpwCongruence\Tenant\TenantEntity;
use Zend\Stdlib\InitializableInterface;

class TenantCollection
    implements \IteratorAggregate, TenantCollectionInterface, InitializableInterface
{
    /**
     * @var IdentityAwareObjectStorageInterface
     */
    private $tenants = null;

    /**
     * @var bool
     */
    private $isInitialized = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (true === $this->isInitialized) {
            return null;
        }

        $this->tenants       = new IdentityAwareObjectStorage();
        $this->isInitialized = true;
    }

    /**
     * @inheritdoc
     */
    public function count()
    {
        $this->init();

        return $this->tenants->count();
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        $this->init();

        return new \ArrayIterator(iterator_to_array($this->tenants));
    }

    /**
     * @inheritdoc
     */
    public function attach(TenantEntity $tenant)
    {
        $this->init();

        $this->tenants->attach($tenant);
    }

    /**
     * @inheritdoc
     */
    public function detach(TenantEntity $tenant)
    {
        $this->init();

        return $this->tenants->detach($tenant);
    }

    /**
     * @inheritdoc
     */
    public function contains(TenantEntity $tenant)
    {
        $this->init();

        return $this->tenants->contains($tenant);
    }

}//end class