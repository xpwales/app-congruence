<?php

namespace XpwCongruence\IdHash;

interface IdHashAwareInterface
{
    /**
     * @param string $idHash
     *
     * @return $this
     */
    public function setIdHash($idHash);

    /**
     * @return string
     */
    public function getIdHash();
    
}//end interface