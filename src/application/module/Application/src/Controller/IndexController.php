<?php

namespace Application\Controller;

use XpwCongruence\Tenant\DataMapper\TenantDataMapperInterface;
use XpwCongruence\Tenant\Factory\TenantEntityFactoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\ServiceManager;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $config = null;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function indexAction()
    {
        $config           = $this->config;
        /** @var ServiceManager $sm */
        $sm               = $config['ServiceManager'];
        /** @var TenantDataMapperInterface $tenantDataMapper */
        $tenantDataMapper = $sm->get('tenantDataMapper');

        /** @var TenantEntityFactoryInterface $tenFactory */
        $tenFactory = $sm->get('tenantEntityFactory');

        $tenant = $tenFactory->create();
        $tenant->setIdHash(md5(microtime() . rand(1000, 1000000)))
            ->setNameKey('mike-' . rand(1, 10000000));

        $tenantDataMapper->insert($tenant);


        return new ViewModel();
    }
}