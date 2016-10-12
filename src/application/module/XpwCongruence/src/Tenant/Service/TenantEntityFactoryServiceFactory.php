<?php

namespace XpwCongruence\Tenant\Service;

use Interop\Container\ContainerInterface;
use Xpwales\Identity\Factory\IdentityFactoryInterface;
use XpwCongruence\Tenant\Factory\TenantEntityFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceManager;

class TenantEntityFactoryServiceFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ServiceManager $serviceLocator */
        $serviceLocator  = $container->get('ServiceManager');
        $tenantFactory   = new TenantEntityFactory();
        /** @var IdentityFactoryInterface $identityFactory */
        $identityFactory = $serviceLocator->get('tenantIdentityFactory');

        $tenantFactory->setIdentityFactory($identityFactory);

        return $tenantFactory;
    }

}//end class