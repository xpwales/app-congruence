<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Factory\IdentityFactoryAwareTrait;
use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\Identity\Utils\GuardIdentityIsCompleteStatusTrait;
use Xpwales\IdentityMap\IdentityMapAwareInterface;
use Xpwales\IdentityMap\IdentityMapAwareTrait;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareTrait;
use XpwCongruence\Tenant\DataMapper\Collection\TenantCollection;
use XpwCongruence\Tenant\TenantEntityInterface;
use Zend\Db\Adapter\AdapterAwareInterface;
use Zend\Db\Adapter\AdapterAwareTrait;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerAwareTrait;
use Zend\Hydrator\HydratorAwareInterface;
use Zend\Hydrator\HydratorAwareTrait;

class TenantDataMapper
    implements  TenantDataMapperInterface,
                IdentityMapAwareInterface,
                IdHashGeneratorAwareInterface,
                HydratorAwareInterface,
                AdapterAwareInterface,
                EventManagerAwareInterface
{
    use IdentityMapAwareTrait,
        GuardIdentityIsCompleteStatusTrait,
        IdHashGeneratorAwareTrait,
        HydratorAwareTrait,
        AdapterAwareTrait,
        EventManagerAwareTrait,
        IdentityFactoryAwareTrait;

    /**
     * @inheritdoc
     */
    public function insert(TenantEntityInterface $tenant)
    {
        $identity = $tenant->getIdentity();
        
        $this->guardIdentityIsIncomplete($identity);

        $tenantDataHydrator = $this->getHydrator();
        $data               = $tenantDataHydrator->extract($tenant);
        
        
        // @todo Insert code here

        // Fire pre event

        // Fire event

        // Fire post event

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function update(TenantEntityInterface $tenant)
    {
        $identity = $tenant->getIdentity();

        $this->guardIdentityIsComplete($identity);

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function delete(TenantEntityInterface $tenant)
    {
        $identity = $tenant->getIdentity();

        $this->guardIdentityIsComplete($identity);

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function find(IdentityInterface $identity)
    {


        return null;
    }

    /**
     * @inheritdoc
     */
    public function findAll(TenantFindOptionsInterface $options)
    {
        $collection = new TenantCollection();

        return $collection;
    }

}//end class