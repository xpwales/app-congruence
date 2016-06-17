<?php

namespace XpwCongruence\Tenant\DataMapper;

use XpwCongruence\Tenant\TenantEntity;

class TenantDataHydrator implements TenantDataHydratorInterface
{
    /**
     * @inheritdoc
     */
    public function hydrate(array $data, TenantEntity $tenant)
    {
        foreach ($data as $name => $value) {
            switch ($name) {
                case 'TEN_id':
                    $tenant->getIdentity()->setValue($value);
                break;

                case 'TEN_id_hash':
                    $tenant->setIdHash($value);
                break;

                case 'TEN_name_key':
                   $tenant->setNameKey($value);
                break;

                case 'TEN_created_timestamp':
                    $tenant->getCreatedTimestamp()->setTimestamp($value);
                break;

                case 'TEN_modified_timestamp':
                    $tenant->getModifiedTimestamp()->setTimestamp($value);
                break;

                case 'TEN_sys_admin_notes':
                    $tenant->setSysAdminNotes($value);
                break;

                default:
                    //do nothing
                break;

            }//end switch

        }//end loop

        return $tenant;
    }

    /**
     * @inheritdoc
     */
    public function extract(TenantEntity $tenant)
    {
        $data = [];

        $data['TEN_id'] = current($tenant->getIdentity()->getValues());


        return $data;
    }

}//end class