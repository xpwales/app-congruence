<?php

namespace XpwCongruence\ModelUtility\NameKey;

interface NameKeyAwareInterface
{
    /**
     * @param string $nameKey
     *
     * @return $this
     */
    public function setNameKey($nameKey);

    /**
     * @return string
     */
    public function getNameKey();

}//end interface