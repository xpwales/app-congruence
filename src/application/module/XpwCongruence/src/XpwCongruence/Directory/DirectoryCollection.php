<?php

namespace XpwCongruence\Directory;

use Zend\Stdlib\InitializableInterface;

class DirectoryCollection
    implements InitializableInterface
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

}//end class