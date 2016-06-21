<?php

namespace XpwCongruence\Directory\DataMapper;

use Xpwales\DataMapper\FindOptions\DataMapperFindOptionsTrait;
use XpwCongruence\Tenant\TenantEntity;

class DirectoryFindOptions implements DirectoryFindOptionsInterface
{
    use DataMapperFindOptionsTrait;
    
    /**
     * @var array
     */
    private $tenantIncludes = [];

    /**
     * @var array
     */
    private $tenantExcludes = [];

    //
    // Tenant
    //

    /**
     * @param TenantEntity $tenant
     *
     * @return $this
     */
    public function addTenantInclude(TenantEntity $tenant)
    {
        return $this;
    }

    /**
     * @param TenantEntity $tenant
     *
     * @return $this
     */
    public function addTenantExclude(TenantEntity $tenant)
    {

        return $this;
    }

}//end class