<?php

namespace XpwCongruence\Timestamp;

interface EntityTimestampInterface
{
    //
    // Created
    //

    /**
     * @param \DateTime $timestamp
     *
     * @return $this
     */
    public function setCreatedTimestamp(\DateTime $timestamp);

    /**
     * @return \DateTime
     */
    public function getCreatedTimestamp();

    //
    // Modified
    //

    /**
     * @param \DateTime $timestamp
     *
     * @return $this
     */
    public function setModifiedTimestamp(\DateTime $timestamp);

    /**
     * @return \DateTime
     */
    public function getModifiedTimestamp();

}//end interface