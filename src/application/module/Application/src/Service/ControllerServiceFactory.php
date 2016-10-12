<?php

namespace Application\Service;

use Application\Controller\IndexController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ControllerServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = [];
        $config['ServiceManager']     = $container->get('ServiceManager');
        $controller = new IndexController($config);

        return $controller;
    }

}//end class