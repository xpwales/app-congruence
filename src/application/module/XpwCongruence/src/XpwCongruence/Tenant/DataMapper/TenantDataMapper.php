<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\IdentityMap\IdentityMapAwareInterface;
use Xpwales\IdentityMap\IdentityMapAwareTrait;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareTrait;
use XpwCongruence\Tenant\TenantEntity;
use Zend\Hydrator\HydratorAwareInterface;
use Zend\Hydrator\HydratorAwareTrait;

class TenantDataMapper
    implements  TenantDataMapperInterface,
                IdentityMapAwareInterface,
                IdHashGeneratorAwareInterface,
                HydratorAwareInterface
{
    use IdentityMapAwareTrait,
        IdHashGeneratorAwareTrait,
        HydratorAwareTrait;

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
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    /**
     * @inheritdoc
     */
    public function findAll(array $options)
    {
        // TODO: Implement findAll() method.
    }

}//end class