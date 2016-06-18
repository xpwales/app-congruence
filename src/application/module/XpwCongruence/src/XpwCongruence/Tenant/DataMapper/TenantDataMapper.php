<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\IdentityMap\IdentityMapAwareInterface;
use Xpwales\IdentityMap\IdentityMapAwareTrait;
use XpwCongruence\Tenant\TenantEntity;

class TenantDataMapper
    implements  TenantDataMapperInterface,
                IdentityMapAwareInterface
{
    use IdentityMapAwareTrait;

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