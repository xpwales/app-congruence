<?php

namespace XpwCongruence\EnabledStatus;

interface EnabledStatusGetterAwareInterface
{
    /**
     * @return bool
     */
    public function getIsEnabled();

}//end interface