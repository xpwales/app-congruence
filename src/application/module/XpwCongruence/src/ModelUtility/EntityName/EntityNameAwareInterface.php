<?php

namespace XpwCongruence\ModelUtility\EntityName;

interface EntityNameAwareInterface
{
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

}//end interface