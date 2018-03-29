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

        return new ViewModel();
    }
}