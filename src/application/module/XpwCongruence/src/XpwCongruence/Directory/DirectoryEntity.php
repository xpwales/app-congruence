<?php

namespace XpwCongruence\Directory;

use Xpwales\Identity\Identity\IdentityAwareInterface;
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
    implements IdentityAwareInterface,
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