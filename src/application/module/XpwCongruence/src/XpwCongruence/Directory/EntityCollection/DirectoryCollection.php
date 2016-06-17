<?php

namespace XpwCongruence\Directory\EntityCollection;

use XpwCongruence\Directory\DirectoryEntity;
use Zend\Stdlib\InitializableInterface;

class DirectoryCollection
    implements  InitializableInterface,
                \IteratorAggregate,
                DirectoryCollectionInterface
{
    /**
     * @var \SplObjectStorage
     */
    private $directories = null;

    /**
     * @var bool
     */
    private $isInitialized = false;

    /**
     * Idempotent initialization
     *
     * @inheritdoc
     */
    public function init()
    {
        if (true === $this->isInitialized) {
            return null;
        }

        $this->directories   = new \SplObjectStorage();
        $this->isInitialized = true;
    }

    /**
     * @param DirectoryEntity $directory
     *
     * @return bool
     */
    public function attachDirectory(DirectoryEntity $directory)
    {
        $this->init();

        if ($this->containsDirectory($directory) === true) {
            return false;
        }

        $this->directories->attach($directory);

        return true;
    }

    /**
     * @param DirectoryEntity $directory
     *
     * @return bool
     */
    public function detachDirectory(DirectoryEntity $directory)
    {
        $this->init();

        if ($this->containsDirectory($directory) === false) {
            return false;
        }

        $this->directories->detach($directory);

        return true;
    }

    /**
     * @param DirectoryEntity $directory
     *
     * @return bool
     */
    public function containsDirectory(DirectoryEntity $directory)
    {
        $this->init();

        return $this->directories->contains($directory);
    }

    //
    // Iteration
    //

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        $this->init();

        return $this->directories;
    }

    /**
     * @inheritdoc
     */
    public function count()
    {
        $this->init();

        return $this->directories->count();
    }

}//end class