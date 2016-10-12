<?php

namespace XpwCongruence\Tenant\Factory;

interface TenantEntityFactoryAwareInterface
{
    /**
     * @param TenantEntityFactoryInterface $tenantEntityFactory
     *
     * @return $this
     */
    public function setTenantEntityFactory(TenantEntityFactoryInterface $tenantEntityFactory);

    /**
     * @return TenantEntityFactoryInterface
     */
    public function getTenantEntityFactory();

}//end interface