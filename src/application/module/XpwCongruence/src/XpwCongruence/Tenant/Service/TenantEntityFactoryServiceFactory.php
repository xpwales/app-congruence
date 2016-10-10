<?php

namespace XpwCongruence\Tenant\Service;

use Xpwales\Identity\Factory\IdentityFactoryInterface;
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
        $tenantFactory   = new TenantEntityFactory();
        /** @var IdentityFactoryInterface $identityFactory */
        $identityFactory = $serviceLocator->get('tenantIdentityFactory');

        $tenantFactory->setIdentityFactory($identityFactory);

        return $tenantFactory;
    }

}//end class