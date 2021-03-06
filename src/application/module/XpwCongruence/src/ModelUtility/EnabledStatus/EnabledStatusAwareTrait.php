<?php

namespace XpwCongruence\ModelUtility\EnabledStatus;

use XpwCongruence\ModelUtility\EnabledStatus\Exception;

trait EnabledStatusAwareTrait
{
    /**
     * @var bool
     */
    private $isEnabled = null;

    /**
     * @see \XpwCongruence\ModelUtility\EnabledStatus\EnabledStatusAwareInterface
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
     * @see \XpwCongruence\ModelUtility\EnabledStatus\EnabledStatusAwareInterface
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