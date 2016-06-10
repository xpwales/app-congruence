<?php

namespace XpwCongruence\Timestamp;

use XpwCongruence\Timestamp\Exception;

trait EntityTimestampTrait
{
    /**
     * @var \DateTime
     */
    private $createdTimestamp = null;

    /**
     * @var \DateTime
     */
    private $modifiedTimestamp = null;

    //
    // Created
    //

    /**
     * @param \DateTime $timestamp
     *
     * @return $this
     */
    public function setCreatedTimestamp(\DateTime $timestamp)
    {
        $this->createdTimestamp = $timestamp;
        return $this;
    }

    /**
     * @throws Exception\RuntimeException on unset timestamp
     *
     * @return \DateTime
     */
    public function getCreatedTimestamp()
    {
        if (null === $this->createdTimestamp) {
            $msg = sprintf(
                'Created timestamp must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->createdTimestamp;
    }

    //
    // Modified
    //

    /**
     * @param \DateTime $timestamp
     *
     * @return $this
     */
    public function setModifiedTimestamp(\DateTime $timestamp)
    {
        $this->modifiedTimestamp = $timestamp;
        return $this;
    }

    /**
     * @throws Exception\RuntimeException on unset timestamp
     *
     * @return \DateTime
     */
    public function getModifiedTimestamp()
    {
        if (null === $this->modifiedTimestamp) {
            $msg = sprintf(
                'Modified timestamp must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->modifiedTimestamp;
    }

}//end trait