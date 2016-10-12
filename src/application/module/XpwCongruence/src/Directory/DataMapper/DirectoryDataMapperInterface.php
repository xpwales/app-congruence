<?php

namespace XpwCongruence\Directory\DataMapper;

use Xpwales\DataMapper\FindOptions\DataMapperFindOptionsInterface;
use Xpwales\Identity\Identity\IdentityInterface;
use XpwCongruence\Directory\Collection\DirectoryCollectionInterface;
use XpwCongruence\Directory\DirectoryEntity;

interface DirectoryDataMapperInterface
{
    /**
     * @param DirectoryEntity $directory
     *
     * @return DirectoryEntity
     */
    public function insert(DirectoryEntity $directory);

    /**
     * @param DirectoryEntity $directory
     *
     * @return DirectoryEntity
     */
    public function update(DirectoryEntity $directory);

    /**
     * @param DirectoryEntity $directory
     *
     * @return DirectoryEntity
     */
    public function delete(DirectoryEntity $directory);

    /**
     * @param IdentityInterface $identity
     *
     * @return DirectoryEntity|null
     */
    public function find(IdentityInterface $identity);

    /**
     * @param DataMapperFindOptionsInterface $options
     *
     * @return DirectoryCollectionInterface
     */
    public function findAll(DataMapperFindOptionsInterface $options);

}//end interface