<?php

namespace XpwCongruence\Tenant\Identity;

use Xpwales\Identity\Domainspace\DomainspaceTrait;
use Xpwales\Identity\Factory\IdentityFactoryInterface;
use Xpwales\Identity\Identity\GenericIdentity;

class TenantIdentityFactory implements IdentityFactoryInterface
{
    use DomainspaceTrait;

    /**
     * @inheritdoc
     */
    public function createIdentity()
    {
        $identity    = new GenericIdentity();
        $domainspace = $this->getDomainspace();

        $identity->setDomainspace($domainspace);

        return $identity;
    }

}//end class