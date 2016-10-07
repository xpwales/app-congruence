<?php

namespace XpwCongruence\Tenant\DataMapper;

use Xpwales\Identity\Factory\IdentityFactoryAwareInterface;
use Xpwales\Identity\Identity\IdentityInterface;
use XpwCongruence\Tenant\DataMapper\Collection\TenantCollectionInterface;
use XpwCongruence\Tenant\TenantEntityInterface;

interface TenantDataMapperInterface extends IdentityFactoryAwareInterface
{
    /**
     * @param TenantEntityInterface $tenant
     *
     * @return TenantEntityInterface
     */
    public function insert(TenantEntityInterface $tenant);

    /**
     * @param TenantEntityInterface $tenant
     *
     * @return TenantEntityInterface
     */
    public function update(TenantEntityInterface $tenant);

    /**
     * @param TenantEntityInterface $tenant
     *
     * @return TenantEntityInterface
     */
    public function delete(TenantEntityInterface $tenant);

    /**
     * @param IdentityInterface $identity
     *
     * @return TenantEntityInterface|null
     */
    public function find(IdentityInterface $identity);

    /**
     * @param TenantFindOptionsInterface $options
     *
     * @return TenantCollectionInterface
     */
    public function findAll(TenantFindOptionsInterface $options);

}//end interface