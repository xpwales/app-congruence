<?php

namespace XpwCongruence\Directory\Collection;

interface DirectoryCollectionGetterAwareInterface
{
    /**
     * @return DirectoryCollectionInterface
     */
    public function getDirectories();

}//end interface