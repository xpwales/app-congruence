<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Factory\IdentityFactoryAwareTrait;
use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\Identity\Utils\GuardIdentityIsCompleteStatusTrait;
use Xpwales\IdentityMap\IdentityMapAwareInterface;
use Xpwales\IdentityMap\IdentityMapAwareTrait;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareTrait;
use XpwCongruence\Tenant\DataMapper\Collection\TenantCollection;
use XpwCongruence\Tenant\Factory\TenantEntityFactoryAwareInterface;
use XpwCongruence\Tenant\Factory\TenantEntityFactoryAwareTrait;
use XpwCongruence\Tenant\TenantEntityInterface;
use Zend\Db\Adapter\AdapterAwareInterface;
use Zend\Db\Adapter\AdapterAwareTrait;
use Zend\Db\Sql\Sql;
use Zend\EventManager\Event;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerAwareTrait;
use Zend\Hydrator\HydratorAwareInterface;
use Zend\Hydrator\HydratorAwareTrait;

class TenantDataMapper
    implements  TenantDataMapperInterface,
                IdentityMapAwareInterface,
                IdHashGeneratorAwareInterface,
                HydratorAwareInterface,
                AdapterAwareInterface,
                EventManagerAwareInterface,
                TenantEntityFactoryAwareInterface
{
    use IdentityMapAwareTrait,
        GuardIdentityIsCompleteStatusTrait,
        IdHashGeneratorAwareTrait,
        HydratorAwareTrait,
        AdapterAwareTrait,
        EventManagerAwareTrait,
        IdentityFactoryAwareTrait,
        TenantEntityFactoryAwareTrait;

    /**
     * @inheritdoc
     */
    public function insert(TenantEntityInterface $tenant)
    {
        $identity = $tenant->getIdentity();
        
        $this->guardIdentityIsIncomplete($identity);

        $eventManager       = $this->getEventManager();
        $event              = new Event();
        $tenantDataHydrator = $this->getHydrator();
        $data               = $tenantDataHydrator->extract($tenant);
        $dbConn             = $this->adapter->getDriver()->getConnection();
        $sqlObj             = new Sql($this->adapter);
        $insertObj          = $sqlObj->insert('TEN_tenant');

        $insertObj->values($data);

        $sqlStr = $sqlObj->buildSqlString($insertObj, $this->adapter);


        $event->setTarget($this)
              ->setParam('tenant', $tenant);

        //
        // Pre event
        //
        $event->setName('insert.pre');
        $eventManager->trigger($event);

        //
        // Execute event
        //
        $dbConn->execute($sqlStr);

        $lastGenId = (int) $dbConn->getLastGeneratedValue();

        $tenant->getIdentity()->setValue($lastGenId);

        //
        // Post event
        //
        $event->setName('insert.post');
        $eventManager->trigger($event);

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function update(TenantEntityInterface $tenant)
    {
        $identity = $tenant->getIdentity();

        $this->guardIdentityIsComplete($identity);

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function delete(TenantEntityInterface $tenant)
    {
        $identity = $tenant->getIdentity();

        $this->guardIdentityIsComplete($identity);

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function find(IdentityInterface $identity)
    {


        return null;
    }

    /**
     * @inheritdoc
     */
    public function findAll(TenantFindOptionsInterface $options)
    {
        $collection = new TenantCollection();

        return $collection;
    }

}//end class