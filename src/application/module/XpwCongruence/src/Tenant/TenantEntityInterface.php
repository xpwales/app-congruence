<?php

namespace XpwCongruence\Tenant;

use Xpwales\Identity\IdentityAware\IdentityAwareInterface;
use XpwCongruence\ModelUtility\IdHash\IdHashAwareInterface;
use XpwCongruence\ModelUtility\NameKey\NameKeyAwareInterface;
use XpwCongruence\ModelUtility\Timestamp\EntityTimestampInterface;

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