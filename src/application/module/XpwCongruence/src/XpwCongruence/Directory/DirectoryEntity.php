<?php

namespace XpwCongruence\Directory;

use Xpwales\Identity\Identity\IdentityAwareAccessorInterface;
use Xpwales\Identity\Identity\IdentityAwareTrait;
use XpwCongruence\EnabledStatus\EnabledStatusAwareInterface;
use XpwCongruence\EnabledStatus\EnabledStatusAwareTrait;
use XpwCongruence\EntityName\EntityNameAwareInterface;
use XpwCongruence\EntityName\EntityNameAwareTrait;
use XpwCongruence\IdHash\IdHashAwareInterface;
use XpwCongruence\IdHash\IdHashAwareTrait;

class DirectoryEntity
    implements IdentityAwareAccessorInterface,
                IdHashAwareInterface,
                EnabledStatusAwareInterface,
                EntityNameAwareInterface
{
    use IdentityAwareTrait,
        IdHashAwareTrait,
        EnabledStatusAwareTrait,
        EntityNameAwareTrait;

}//end class