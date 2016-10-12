<?php

namespace XpwCongruence\Tenant\Factory;

use XpwCongruence\Tenant\TenantEntityInterface;

interface TenantEntityFactoryInterface
{
    /**
     * @return TenantEntityInterface
     */
    public function create();

}//end interface