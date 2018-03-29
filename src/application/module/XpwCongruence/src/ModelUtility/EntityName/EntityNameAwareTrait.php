<?php

namespace XpwCongruence\ModelUtility\EntityName;

use XpwCongruence\ModelUtility\EntityName\Exception;

trait EntityNameAwareTrait
{
    /**
     * @var string
     */
    private $name = null;

    /**
     * @see \XpwCongruence\ModelUtility\EntityName\EntityNameAwareInterface
     *
     * @param string $name
     *
     * @throws Exception\InvalidArgumentException on empty param value
     *
     * @return $this
     */
    public function setName($name)
    {
        $name = (string) $name;

        if (empty($name) === true) {
            $msg = sprintf(
                'Name cannot bet set with an empty value in %s',
                __CLASS__
            );

            throw new Exception\InvalidArgumentException($msg);
        }

        $this->name = $name;

        return $this;
    }

    /**
     * @see \XpwCongruence\ModelUtility\EntityName\EntityNameAwareInterface
     *
     * @throws Exception\RuntimeException on unset name
     *
     * @return string
     */
    public function getName()
    {
        if (null === $this->name) {
            $msg = sprintf(
                'Name must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->name;
    }

}//end trait