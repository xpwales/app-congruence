<?php

namespace XpwCongruence\IdHash\Generator;

interface IdHashGeneratorAwareInterface
{
    /**
     * @param IdHashGeneratorInterface $generator
     *
     * @return $this
     */
    public function setIdHashGenerator(IdHashGeneratorInterface $generator);

    /**
     * @return IdHashGeneratorInterface
     */
    public function getIdHashGenerator();

}//end class