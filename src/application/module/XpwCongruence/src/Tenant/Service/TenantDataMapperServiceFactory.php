<?php

namespace XpwCongruence\Tenant\Service;

use Interop\Container\ContainerInterface;
use Xpwales\Identity\Factory\IdentityFactoryInterface;
use Xpwales\IdentityMap\IdentityMapInterface;
use XpwCongruence\Tenant\DataMapper\TenantDataHydrator;
use XpwCongruence\Tenant\DataMapper\TenantDataMapper;
use XpwCongruence\Tenant\Factory\TenantEntityFactoryInterface;
use Zend\Db\Adapter\Adapter;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceManager;

class TenantDataMapperServiceFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ServiceManager $serviceLocator */
        $serviceLocator      = $container->get('ServiceManager');
        $dataMapper          = new TenantDataMapper();
        /** @var IdentityMapInterface $identityMap */
        $identityMap         = $serviceLocator->get('identityMap');
        /** @var IdentityFactoryInterface $identityFactory */
        $identityFactory = $serviceLocator->get('tenantIdentityFactory');
        $dataHydrator        = new TenantDataHydrator();
        /** @var TenantEntityFactoryInterface $tenantEntityFactory */
        $tenantEntityFactory = $serviceLocator->get('tenantEntityFactory');
        /** @var Adapter $dbAdapter */
        $dbAdapter           = $serviceLocator->get('dbAdapter');

        $dataMapper->setIdentityMap($identityMap)
            ->setIdentityFactory($identityFactory)
            ->setHydrator($dataHydrator)
            ->setTenantEntityFactory($tenantEntityFactory)
            ->setDbAdapter($dbAdapter);

        return $dataMapper;
    }

}//end class