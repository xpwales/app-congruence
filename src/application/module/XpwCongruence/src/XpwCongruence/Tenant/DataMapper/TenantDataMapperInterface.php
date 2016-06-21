<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Identity\IdentityInterface;
use XpwCongruence\Tenant\DataMapper\Collection\TenantCollectionInterface;
use XpwCongruence\Tenant\TenantEntity;

interface TenantDataMapperInterface
{
    /**
     * @param TenantEntity $tenant
     *
     * @return TenantEntity
     */
    public function insert(TenantEntity $tenant);

    /**
     * @param TenantEntity $tenant
     *
     * @return TenantEntity
     */
    public function update(TenantEntity $tenant);

    /**
     * @param TenantEntity $tenant
     *
     * @return TenantEntity
     */
    public function delete(TenantEntity $tenant);

    /**
     * @param IdentityInterface $identity
     *
     * @return TenantEntity|null
     */
    public function find(IdentityInterface $identity);

    /**
     * @param array $options
     *
     * @return TenantCollectionInterface
     */
    public function findAll(array $options);

}//end interface