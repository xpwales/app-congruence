<?php

namespace XpwCongruence\Tenant\Service;

use XpwCongruence\Tenant\Factory\TenantEntityFactory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TenantEntityFactoryServiceFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $tenantFactory = new TenantEntityFactory();

        return $tenantFactory;
    }

}//end class