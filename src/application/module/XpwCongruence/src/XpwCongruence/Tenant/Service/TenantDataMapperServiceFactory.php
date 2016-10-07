<?php

namespace XpwCongruence\Tenant\Service;

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
        $dataMapper  = new TenantDataMapper();
        $identityMap = $serviceLocator->get('identityMap');

        $dataMapper->setIdentityMap($identityMap);

        return $dataMapper;
    }

}//end class