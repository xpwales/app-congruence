<?php

namespace XpwCongruence\EnabledStatus;

use XpwCongruence\EnabledStatus\Exception;

trait EnabledStatusAwareTrait
{
    /**
     * @var bool
     */
    private $isEnabled = null;

    /**
     * @see XpwCongruence\EnabledStatus\EnabledStatusSetterAwareInterface
     *
     * @param bool $flag
     *
     * @return $this
     */
    public function setIsEnabled($flag)
    {
        $this->isEnabled = (bool) $flag;
        return $this;
    }

    /**
     * @see XpwCongruence\EnabledStatus\EnabledStatusGetterAwareInterface
     *
     * @throws Exception\RuntimeException on unset status
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        if (null === $this->isEnabled) {
            $msg = sprintf(
                'Enabled status must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->isEnabled;
    }

}//end trait