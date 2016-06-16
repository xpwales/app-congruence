<?php

namespace XpwCongruence\Tenant\DataMapper;

use XpwCongruence\Tenant\TenantEntity;

class TenantDataHydrator implements TenantDataHydratorInterface
{
    /**
     * @inheritdoc
     */
    public function hydrate(array $data, TenantEntity $tenant)
    {
        // TODO: Implement hydrate() method.

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function extract(TenantEntity $tenant)
    {
        // TODO: Implement extract() method.
    }

}//end class