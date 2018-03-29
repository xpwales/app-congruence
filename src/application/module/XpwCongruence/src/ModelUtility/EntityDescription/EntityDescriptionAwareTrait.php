<?php

namespace XpwCongruence\ModelUtility\EntityDescription;

trait EntityDescriptionAwareTrait
{
    /**
     * @var null|string
     */
    private $description = null;

    /**
     * @see \XpwCongruence\ModelUtility\EntityDescription\EntityDescriptionAwareInterface
     *
     * @param null|string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $description = (string) $description;

        if (empty($description) === true) {
            $this->description = null;

        } else {
            $this->description = $description;
        }

        return $this;
    }

    /**
     * @see \XpwCongruence\ModelUtility\EntityDescription\EntityDescriptionAwareInterface
     * 
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

}//end trait