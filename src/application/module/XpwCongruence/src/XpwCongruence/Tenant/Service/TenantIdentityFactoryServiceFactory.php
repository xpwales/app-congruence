<?php

namespace XpwCongruence\Tenant\Service;

use XpwCongruence\Tenant\Identity\TenantIdentityFactory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TenantIdentityFactoryServiceFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $identityFactory = new TenantIdentityFactory();
        $config          = $serviceLocator->get('config');

        if (isset($config['xpwCongruence']['tenant']['domainspace'])) {
            $domainspace = $config['xpwCongruence']['tenant']['domainspace'];
        } else {
            $domainspace = 'xpwCongruenceTenant';
        }

        $identityFactory->setDomainspace($domainspace);

        return $identityFactory;
    }

}//end class