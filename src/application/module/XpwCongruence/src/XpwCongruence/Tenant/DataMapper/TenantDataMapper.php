<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\IdentityMap\IdentityMapAwareInterface;
use Xpwales\IdentityMap\IdentityMapAwareTrait;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareTrait;
use XpwCongruence\Tenant\TenantEntity;
use Zend\Db\Adapter\AdapterAwareInterface;
use Zend\Db\Adapter\AdapterAwareTrait;
use Zend\Hydrator\HydratorAwareInterface;
use Zend\Hydrator\HydratorAwareTrait;

class TenantDataMapper
    implements  TenantDataMapperInterface,
                IdentityMapAwareInterface,
                IdHashGeneratorAwareInterface,
                HydratorAwareInterface,
                AdapterAwareInterface
{
    use IdentityMapAwareTrait,
        IdHashGeneratorAwareTrait,
        HydratorAwareTrait,
        AdapterAwareTrait;

    /**
     * @inheritdoc
     */
    public function insert(TenantEntity $tenant)
    {

        
    }

    /**
     * @inheritdoc
     */
    public function update(TenantEntity $tenant)
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritdoc
     */
    public function delete(TenantEntity $tenant)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @inheritdoc
     */
    public function find(IdentityInterface $identity)
    {
        // TODO: Implement find() method.
    }

    /**
     * @inheritdoc
     */
    public function findAll(TenantFindOptionsInterface $options)
    {
        // TODO: Implement findAll() method.
    }

}//end class