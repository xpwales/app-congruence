<?php

namespace XpwCongruence\IdentityMap\Service;

use Interop\Container\ContainerInterface;
use Xpwales\IdentityMap\IdentityMap;
use Zend\ServiceManager\Factory\FactoryInterface;

class IdentityMapServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $identityMap = new IdentityMap();

        return $identityMap;
    }

}//end class