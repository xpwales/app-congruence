<?php

namespace XpwCongruence\Directory;

use Xpwales\Identity\Identity\IdentityAwareTrait;
use XpwCongruence\EnabledStatus\EnabledStatusAwareTrait;
use XpwCongruence\EntityName\EntityNameAwareTrait;
use XpwCongruence\IdHash\IdHashAwareTrait;

class DirectoryEntity
{
    use IdentityAwareTrait,
        IdHashAwareTrait,
        EnabledStatusAwareTrait,
        EntityNameAwareTrait;

}// end class