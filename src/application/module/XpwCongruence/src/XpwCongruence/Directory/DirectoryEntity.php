<?php

namespace XpwCongruence\Directory;

use Xpwales\Identity\Identity\IdentityAwareAccessorInterface;
use Xpwales\Identity\Identity\IdentityAwareTrait;
use XpwCongruence\EnabledStatus\EnabledStatusAwareInterface;
use XpwCongruence\EnabledStatus\EnabledStatusAwareTrait;
use XpwCongruence\EntityDescription\EntityDescriptionAwareInterface;
use XpwCongruence\EntityDescription\EntityDescriptionAwareTrait;
use XpwCongruence\EntityName\EntityNameAwareInterface;
use XpwCongruence\EntityName\EntityNameAwareTrait;
use XpwCongruence\IdHash\IdHashAwareInterface;
use XpwCongruence\IdHash\IdHashAwareTrait;
use XpwCongruence\Timestamp\EntityTimestampInterface;
use XpwCongruence\Timestamp\EntityTimestampTrait;

class DirectoryEntity
    implements IdentityAwareAccessorInterface,
                IdHashAwareInterface,
                EnabledStatusAwareInterface,
                EntityNameAwareInterface,
                EntityTimestampInterface,
                EntityDescriptionAwareInterface
{
    use IdentityAwareTrait,
        IdHashAwareTrait,
        EnabledStatusAwareTrait,
        EntityNameAwareTrait,
        EntityTimestampTrait,
        EntityDescriptionAwareTrait;

}//end class