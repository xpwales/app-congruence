<?php

namespace XpwCongruence\IdentityMap\Service;

use Xpwales\IdentityMap\IdentityMap;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IdentityMapServiceFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $identityMap = new IdentityMap();

        return $identityMap;
    }

}//end class