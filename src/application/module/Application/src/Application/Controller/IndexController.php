<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use XpwCongruence\Tenant\DataMapper\TenantDataMapperInterface;
use XpwCongruence\Tenant\Factory\TenantEntityFactoryInterface;
use Zend\Db\Adapter\Adapter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $sm               = $this->getServiceLocator();
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