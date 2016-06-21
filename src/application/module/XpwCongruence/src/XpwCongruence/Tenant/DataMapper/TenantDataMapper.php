<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\IdentityMap\IdentityMapAwareInterface;
use Xpwales\IdentityMap\IdentityMapAwareTrait;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareTrait;
use XpwCongruence\Tenant\DataMapper\Collection\TenantCollection;
use XpwCongruence\Tenant\DataMapper\Exception;
use XpwCongruence\Tenant\TenantEntity;
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
        IdHashGeneratorAwareTrait,
        HydratorAwareTrait,
        AdapterAwareTrait,
        EventManagerAwareTrait;

    /**
     * @inheritdoc
     *
     * @throws Exception\InvalidArgumentException on identity being complete
     */
    public function insert(TenantEntity $tenant)
    {
        $identity = $tenant->getIdentity();
        
        if ($identity->isComplete() === true) {
            $msg = 'Identity must be in-complete for insert';
            throw new Exception\InvalidArgumentException($msg);
        }

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
    public function update(TenantEntity $tenant)
    {

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function delete(TenantEntity $tenant)
    {

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