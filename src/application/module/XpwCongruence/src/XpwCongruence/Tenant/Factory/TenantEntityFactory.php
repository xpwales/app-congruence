<?php

namespace XpwCongruence\Tenant\Factory;

use XpwCongruence\Tenant\TenantEntity;

class TenantEntityFactory implements TenantEntityFactoryInterface
{
    /**
     * @inheritdoc
     */
    public function create()
    {
        $tenant = new TenantEntity();

        return $tenant;
    }

}//end class