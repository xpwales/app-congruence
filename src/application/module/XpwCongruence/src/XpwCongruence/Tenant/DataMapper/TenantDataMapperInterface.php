<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Identity\IdentityInterface;
use XpwCongruence\Tenant\TenantEntity;

interface TenantDataMapperInterface
{
    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function insert(TenantEntity $tenant);

    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function update(TenantEntity $tenant);

    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function delete(TenantEntity $tenant);

    /**
     * @param int|IdentityInterface $id
     *
     * @return TenantEntity|null
     */
    public function find($id);

    /**
     * @param array $options
     *
     * @return array|\Traversable
     */
    public function findAll(array $options);

}//end interface