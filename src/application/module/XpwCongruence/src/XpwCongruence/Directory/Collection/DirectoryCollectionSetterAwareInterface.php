<?php

namespace XpwCongruence\Directory\Collection;

interface DirectoryCollectionSetterAwareInterface
{
    /**
     * @param DirectoryCollectionInterface $directories
     *
     * @return $this
     */
    public function setDirectories(DirectoryCollectionInterface $directories);

}//end interface