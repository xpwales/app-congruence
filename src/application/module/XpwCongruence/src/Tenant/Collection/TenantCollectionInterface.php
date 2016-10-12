<?php

namespace XpwCongruence\Tenant\DataMapper\Collection;

use XpwCongruence\Tenant\TenantEntity;

interface TenantCollectionInterface extends \Countable, \Traversable
{
    /**
     * @param TenantEntity $tenant
     *
     * @return void
     */
    public function attach(TenantEntity $tenant);

    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function detach(TenantEntity $tenant);

    /**
     * @param TenantEntity $tenant
     *
     * @return bool
     */
    public function contains(TenantEntity $tenant);

}//end interface