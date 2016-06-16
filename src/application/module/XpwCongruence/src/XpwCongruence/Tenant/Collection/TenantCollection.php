<?php

namespace XpwCongruence\Tenant\DataMapper\Collection;

use XpwCongruence\Tenant\TenantEntity;
use Zend\Stdlib\InitializableInterface;

class TenantCollection
    implements \IteratorAggregate, TenantCollectionInterface, InitializableInterface
{
    /**
     * @var \SplObjectStorage
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

        $this->tenants       = new \SplObjectStorage();
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
        return $this->tenants;
    }

    /**
     * @param TenantEntity $tenant
     * 
     * @return bool
     */
    public function attach(TenantEntity $tenant)
    {
        $this->init();

        if ($this->contains($tenant) === true) {
            return false;
        }

        $this->tenants->attach($tenant);

        return true;
    }

    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function detach(TenantEntity $tenant)
    {
        $this->init();

        if ($this->contains($tenant) === true) {
            return false;
        }

        $this->tenants->detach($tenant);

        return true;
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

}//end class