<?php

namespace XpwCongruence\Tenant\DataMapper;

use XpwCongruence\Tenant\TenantEntity;

interface TenantDataHydratorInterface
{
    /**
     * @param array        $data
     * @param TenantEntity $tenant
     *
     * @return TenantEntity
     */
    public function hydrate(array $data, TenantEntity $tenant);

    /**
     * @param TenantEntity $tenant
     *
     * @return array
     */
    public function extract(TenantEntity $tenant);

}//end interface

