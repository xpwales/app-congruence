<?php

namespace XpwCongruence\NameKey;

use XpwCongruence\NameKey\Exception;

trait NameKeyAwareTrait
{
    /**
     * @var string
     */
    private $nameKey = null;

    /**
     * @see XpwCongruence\NameKey\NameKeyAwareInterface
     *
     * @param string $nameKey
     *
     * @throws Exception\InvalidArgumentException on empty param value
     *
     * @return $this
     */
    public function setNameKey($nameKey)
    {
        $nameKey = (string) $nameKey;

        if (empty($nameKey) === true) {
            $msg = sprintf(
                'Name key cannot bet set with an empty value in %s',
                __CLASS__
            );

            throw new Exception\InvalidArgumentException($msg);
        }

        $this->nameKey = $nameKey;

        return $this;
    }

    /**
     * @see XpwCongruence\NameKey\NameKeyAwareInterface
     * 
     * @throws Exception\RuntimeException on unset name key
     *
     * @return string
     */
    public function getNameKey()
    {
        if (null === $this->nameKey) {
            $msg = sprintf(
                'Name key must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->nameKey;
    }

}//end trait