<?php

namespace XpwCongruence\Directory;

interface DirectoryCollectionGetterAwareInterface
{
    /**
     * @return DirectoryCollectionInterface
     */
    public function getDirectories();

}//end interface