<?php

namespace XpwCongruence\Tenant\Factory;

use Xpwales\Identity\Factory\IdentityFactoryAwareInterface;
use Xpwales\Identity\Factory\IdentityFactoryAwareTrait;
use XpwCongruence\Tenant\TenantEntity;

class TenantEntityFactory
    implements
        TenantEntityFactoryInterface,
        IdentityFactoryAwareInterface
{
    use IdentityFactoryAwareTrait;

    /**
     * @inheritdoc
     */
    public function create()
    {
        $tenant          = new TenantEntity();
        $identityFactory = $this->getIdentityFactory();

        $tenant->setCreatedTimestamp(new \DateTime('now', new \DateTimeZone('UTC')))
               ->setModifiedTimestamp(new \DateTime('now', new \DateTimeZone('UTC')))
               ->setIdentity($identityFactory->createIdentity());

        return $tenant;
    }

}//end class