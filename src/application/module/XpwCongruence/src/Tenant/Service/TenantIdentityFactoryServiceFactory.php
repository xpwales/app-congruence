<?php

namespace XpwCongruence\Tenant\Service;

use Interop\Container\ContainerInterface;
use XpwCongruence\Tenant\Identity\TenantIdentityFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceManager;

class TenantIdentityFactoryServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ServiceManager $serviceLocator */
        $serviceLocator  = $container->get('ServiceManager');
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