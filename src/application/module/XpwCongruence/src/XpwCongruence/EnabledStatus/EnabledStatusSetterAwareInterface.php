<?php

namespace XpwCongruence\EnabledStatus;

interface EnabledStatusSetterAwareInterface
{

    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setIsEnabled($flag);

}//end interface