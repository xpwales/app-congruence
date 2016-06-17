<?php

namespace XpwCongruence\Directory\EntityCollection;

interface DirectoryCollectionGetterAwareInterface
{
    /**
     * @return DirectoryCollectionInterface
     */
    public function getDirectories();

}//end interface