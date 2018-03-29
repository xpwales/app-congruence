<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'tenantIdentityFactory' => 'XpwCongruence\Tenant\Service\TenantIdentityFactoryServiceFactory',
            'tenantEntityFactory'   => 'XpwCongruence\Tenant\Service\TenantEntityFactoryServiceFactory',
            'tenantDataMapper'      => 'XpwCongruence\Tenant\Service\TenantDataMapperServiceFactory',
            'identityMap'           => 'XpwCongruence\Service\IdentityMapServiceFactory',
        ),
    ),
    'xpwCongurence' => array(
        'tenant' => array(
            'domainspace' => 'XpwCongruenceTenant', // Can be any string which is unique to other domainspaces
        ),
    ),
);