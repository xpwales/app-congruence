<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\IdentityMap\IdentityMapAwareInterface;
use Xpwales\IdentityMap\IdentityMapAwareTrait;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface;
use XpwCongruence\IdHash\Generator\IdHashGeneratorAwareTrait;
use XpwCongruence\Tenant\DataMapper\Collection\TenantCollection;
use XpwCongruence\Tenant\TenantEntity;
use Zend\Db\Adapter\AdapterAwareInterface;
use Zend\Db\Adapter\AdapterAwareTrait;
use Zend\Hydrator\HydratorAwareInterface;
use Zend\Hydrator\HydratorAwareTrait;

class TenantDataMapper
    implements  TenantDataMapperInterface,
                IdentityMapAwareInterface,
                IdHashGeneratorAwareInterface,
                HydratorAwareInterface,
                AdapterAwareInterface
{
    use IdentityMapAwareTrait,
        IdHashGeneratorAwareTrait,
        HydratorAwareTrait,
        AdapterAwareTrait;

    /**
     * @inheritdoc
     */
    public function insert(TenantEntity $tenant)
    {


        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function update(TenantEntity $tenant)
    {

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function delete(TenantEntity $tenant)
    {

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