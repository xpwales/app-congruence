<?php

namespace XpwCongruence\Tenant\DataMapper\Collection;

use XpwCongruence\Tenant\TenantEntity;

interface TenantCollectionInterface extends \Countable, \Traversable
{
    /**
     * @return TenantEntity|null
     */
    public function current();

}//end interface