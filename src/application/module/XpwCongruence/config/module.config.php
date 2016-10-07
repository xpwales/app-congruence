<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'tenantDataMapper' => '\XpwCongruence\Tenant\Service\TenantDataMapperServiceFactory',
            'identityMap'      => '\XpwCongruence\IdentityMap\Service\IdentityMapServiceFactory',
        ),
    ),
);