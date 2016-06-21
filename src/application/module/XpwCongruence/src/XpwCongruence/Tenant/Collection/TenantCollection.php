<?php

namespace XpwCongruence\Tenant\DataMapper\Collection;

use Xpwales\Identity\ObjectStorage\IdentityAwareObjectStorage;
use Xpwales\Identity\ObjectStorage\IdentityAwareObjectStorageInterface;
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

        $this->tenants = new IdentityAwareObjectStorage();

        $this->tenants->setUseDomainspace(false);

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
     * @param TenantEntity $tenant
     * 
     * @return void
     */
    public function attach(TenantEntity $tenant)
    {
        $this->init();

        $this->tenants->attach($tenant);
    }

    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function detach(TenantEntity $tenant)
    {
        $this->init();

        $this->tenants->detach($tenant);
    }

    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function contains(TenantEntity $tenant)
    {
        $this->init();

        return $this->tenants->contains($tenant);
    }

    /**
     * @inheritdoc
     */
    public function current()
    {
        $this->init();
        
        return $this->tenants->current();
    }

}//end class