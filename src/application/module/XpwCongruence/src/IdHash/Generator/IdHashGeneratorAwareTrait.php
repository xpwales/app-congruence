<?php

namespace XpwCongruence\IdHash\Generator;

use XpwCongruence\IdHash\Exception;

trait IdHashGeneratorAwareTrait
{
    /**
     * @var IdHashGeneratorInterface
     */
    private $idHashGenerator = null;

    /**
     * @see XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface
     *
     * @param IdHashGeneratorInterface $generator
     *
     * @return $this
     */
    public function setIdHashGenerator(IdHashGeneratorInterface $generator)
    {
        $this->idHashGenerator = $generator;
        return $this;
    }

    /**
     * @see XpwCongruence\IdHash\Generator\IdHashGeneratorAwareInterface
     *
     * @return IdHashGeneratorInterface
     */
    public function getIdHashGenerator()
    {
        if (null === $this->idHashGenerator) {
            $msg = sprintf('Id hash generator must be set before access in %s', __CLASS__);
            throw new Exception\RuntimeException($msg);
        }

        return $this->idHashGenerator;
    }

}//end trait