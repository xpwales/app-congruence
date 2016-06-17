<?php

namespace XpwCongruence\Tenant;

use Xpwales\Identity\Identity\IdentityAwareInterface;
use Xpwales\Identity\Identity\IdentityAwareTrait;
use XpwCongruence\IdHash\IdHashAwareInterface;
use XpwCongruence\IdHash\IdHashAwareTrait;
use XpwCongruence\NameKey\NameKeyAwareInterface;
use XpwCongruence\NameKey\NameKeyAwareTrait;
use XpwCongruence\Timestamp\EntityTimestampInterface;
use XpwCongruence\Timestamp\EntityTimestampTrait;

class TenantEntity
    implements  IdentityAwareInterface,
                EntityTimestampInterface,
                IdHashAwareInterface,
                NameKeyAwareInterface
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
     * @param string|null $notes
     *
     * @return string
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
     * @return null|string
     */
    public function getSysAdminNotes()
    {
        return $this->sysAdminNotes;
    }

}//end class