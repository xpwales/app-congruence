<?php

namespace XpwCongruence\ModelUtility\EntityDescription;

interface EntityDescriptionAwareInterface
{
    /**
     * @param null|string $description
     *
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return null|string
     */
    public function getDescription();

}//end interface