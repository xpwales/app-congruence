<?php

namespace XpwCongruence\Tenant\Service;

use Xpwales\Identity\Factory\IdentityFactoryInterface;
use Xpwales\IdentityMap\IdentityMapInterface;
use XpwCongruence\Tenant\DataMapper\TenantDataMapper;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TenantDataMapperServiceFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dataMapper      = new TenantDataMapper();
        /** @var IdentityMapInterface $identityMap */
        $identityMap     = $serviceLocator->get('identityMap');
        /** @var IdentityFactoryInterface $identityFactory */
        $identityFactory = $serviceLocator->get('tenantIdentityFactory');

        $dataMapper->setIdentityMap($identityMap)
                   ->setIdentityFactory($identityFactory);

        return $dataMapper;
    }

}//end class