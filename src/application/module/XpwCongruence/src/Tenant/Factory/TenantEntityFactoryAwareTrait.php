<?php

namespace XpwCongruence\Tenant\Factory;

use XpwCongruence\Tenant\Factory\Exception;

trait TenantEntityFactoryAwareTrait
{
    /**
     * @var TenantEntityFactoryInterface
     */
    private $tenantEntityFactory = null;

    /**
     * @see TenantEntityFactoryAwareInterface
     *
     * @param TenantEntityFactoryInterface $tenantEntityFactory
     *
     * @return $this
     */
    public function setTenantEntityFactory(TenantEntityFactoryInterface $tenantEntityFactory)
    {
        $this->tenantEntityFactory = $tenantEntityFactory;

        return $this;
    }

    /**
     * @see TenantEntityFactoryAwareInterface
     *
     * @throws Exception\RuntimeException on unset factory
     *
     * @return TenantEntityFactoryInterface
     */
    public function getTenantEntityFactory()
    {
        if (null === $this->tenantEntityFactory) {
            $msg = sprintf(
                'Tenant entity factory must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->tenantEntityFactory;
    }

}//end trait