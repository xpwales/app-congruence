<?php

namespace XpwCongruence\IdHash;

use XpwCongruence\IdHash\Exception;

trait IdHashAwareTrait
{
    /**
     * @var string
     */
    private $idHash = null;

    /**
     * @see XpwCongruence\IdHash\IdHashAwareInterface
     *
     * @param string $idHash
     *
     * @throws Exception\InvalidArgumentException on empty param value
     *
     * @return $this
     */
    public function setIdHash($idHash)
    {
        $idHash = (string) $idHash;

        if (empty($idHash) === true) {
            $msg = sprintf(
                'ID hash cannot be set with an empty value in %s',
                __CLASS__
            );

            throw new Exception\InvalidArgumentException($msg);
        }

        $this->idHash = $idHash;

        return $this;
    }

    /**
     * @see XpwCongruence\IdHash\IdHashAwareInterface
     * 
     * @throws Exception\RuntimeException on unset hash
     *
     * @return string
     */
    public function getIdHash()
    {
        if (null === $this->idHash) {
            $msg = sprintf(
                'ID hash must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->idHash;
    }

}//end trait