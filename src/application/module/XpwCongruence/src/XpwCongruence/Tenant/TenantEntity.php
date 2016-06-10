<?php

namespace XpwCongruence\Tenant;

use XpwCongruence\EntityName\EntityNameAwareTrait;
use XpwCongruence\IdHash\IdHashAwareTrait;
use XpwCongruence\NameKey\NameKeyAwareTrait;
use XpwCongruence\Timestamp\EntityTimestampTrait;

class TenantEntity
{
    use EntityTimestampTrait,
        IdHashAwareTrait,
        NameKeyAwareTrait,
        EntityNameAwareTrait;

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