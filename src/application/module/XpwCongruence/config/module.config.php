<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'tenantIdentityFactory' => 'XpwCongruence\Tenant\Service\TenantIdentityFactoryServiceFactory',
            'tenantDataMapper'      => 'XpwCongruence\Tenant\Service\TenantDataMapperServiceFactory',
            'identityMap'           => 'XpwCongruence\IdentityMap\Service\IdentityMapServiceFactory',
        ),
    ),
    'xpwCongurence' => array(
        'tenant' => array(
            'domainspace' => 'XpwCongruenceTenant', // Can be any string which is unique to other domainspaces
        ),
    ),
);