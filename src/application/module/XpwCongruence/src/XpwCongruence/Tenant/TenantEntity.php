<?php

namespace XpwCongruence\Tenant;

use XpwCongruence\IdHash\IdHashAwareTrait;
use XpwCongruence\NameKey\NameKeyAwareTrait;
use XpwCongruence\Timestamp\EntityTimestampTrait;

class TenantEntity
{
    use EntityTimestampTrait,
        IdHashAwareTrait,
        NameKeyAwareTrait;

}//end class