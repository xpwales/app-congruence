<?php

namespace XpwCongruence\Tenant;

use XpwCongruence\IdHash\IdHashAwareTrait;
use XpwCongruence\Timestamp\EntityTimestampTrait;

class TenantEntity
{
    use EntityTimestampTrait,
        IdHashAwareTrait;

}//end class