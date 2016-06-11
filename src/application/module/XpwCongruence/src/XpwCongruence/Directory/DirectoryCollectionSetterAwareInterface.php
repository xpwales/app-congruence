<?php

namespace XpwCongruence\Directory;

interface DirectoryCollectionSetterAwareInterface
{
    /**
     * @param DirectoryCollectionInterface $directories
     *
     * @return $this
     */
    public function setDirectories(DirectoryCollectionInterface $directories);

}//end interface