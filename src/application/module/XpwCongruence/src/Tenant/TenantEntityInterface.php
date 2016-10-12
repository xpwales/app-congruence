<?php

namespace XpwCongruence\Tenant;

use Xpwales\Identity\IdentityAware\IdentityAwareInterface;
use XpwCongruence\IdHash\IdHashAwareInterface;
use XpwCongruence\NameKey\NameKeyAwareInterface;
use XpwCongruence\Timestamp\EntityTimestampInterface;

interface TenantEntityInterface
    extends IdentityAwareInterface,
            EntityTimestampInterface,
            IdHashAwareInterface,
            NameKeyAwareInterface
{
    /**
     * @param string|null $notes
     *
     * @return string
     */
    public function setSysAdminNotes($notes);

    /**
     * @return null|string
     */
    public function getSysAdminNotes();

}//end interface