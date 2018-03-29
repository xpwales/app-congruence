<?php

namespace XpwCongruence\Tenant;

use Xpwales\Identity\IdentityAware\IdentityAwareTrait;
use XpwCongruence\ModelUtility\IdHash\IdHashAwareTrait;
use XpwCongruence\ModelUtility\NameKey\NameKeyAwareTrait;
use XpwCongruence\ModelUtility\Timestamp\EntityTimestampTrait;

class TenantEntity
    implements TenantEntityInterface
{
    use EntityTimestampTrait,
        IdHashAwareTrait,
        NameKeyAwareTrait,
        IdentityAwareTrait;

    /**
     * @var null|string
     */
    private $sysAdminNotes = null;

    /**
     * @inheritdoc
     */
    public function setSysAdminNotes($notes)
    {
        $notes = (string) $notes;

        if (empty($notes) === true) {
            $this->sysAdminNotes = null;

        } else {
            $this->sysAdminNotes = $notes;
        }

        return $notes;
    }

    /**
     * @inheritdoc
     */
    public function getSysAdminNotes()
    {
        return $this->sysAdminNotes;
    }

}//end class