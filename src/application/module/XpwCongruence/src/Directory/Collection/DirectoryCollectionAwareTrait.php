<?php

namespace XpwCongruence\Directory\Collection;

use XpwCongruence\Directory\Exception;

trait DirectoryCollectionAwareTrait
{
    /**
     * @var DirectoryCollectionInterface
     */
    private $directories = null;

    /**
     * @see XpwCongruence\Directory\DirectoryCollectionSetterAwareInterface
     *
     * @param DirectoryCollectionInterface $directories
     *
     * @return $this
     */
    public function setDirectories(DirectoryCollectionInterface $directories)
    {
        $this->directories = $directories;
        return $this;
    }

    /**
     * @see XpwCongruence\Directory\DirectoryCollectionGetterAwareInterface
     *
     * @throws Exception\RuntimeException on unset directories
     *
     * @return DirectoryCollectionInterface
     */
    public function getDirectories()
    {
        if (null === $this->directories) {
            $msg = sprintf(
                'Directories must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->directories;
    }

}//end trait