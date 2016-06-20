<?php

namespace XpwCongruence\Tenant\DataMapper;

use XpwCongruence\Tenant\TenantEntity;
use Zend\Hydrator\HydratorInterface;
use XpwCongruence\Tenant\Exception;

class TenantDataHydrator implements HydratorInterface
{
    /**
     * @inheritdoc
     */
    public function hydrate(array $data, $object)
    {
        $tenant = $this->guardObject($object);

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
    public function extract($object)
    {
        $tenant = $this->guardObject($object);
        $data   = [];

        if ($tenant->getIdentity()->isComplete() === true) {
            $data['TEN_id'] = current($tenant->getIdentity()->getValues());
        }

        $data['TEN_id_hash']            = $tenant->getIdHash();
        $data['TEN_name_key']           = $tenant->getNameKey();
        $data['TEN_created_timestamp']  = $tenant->getCreatedTimestamp()->getTimestamp();
        $data['TEN_modified_timestamp'] = $tenant->getModifiedTimestamp()->getTimestamp();
        $data['TEN_sys_admin_notes']    = $tenant->getSysAdminNotes();

        return $data;
    }

    /**
     * @param mixed $object
     *
     * @throws Exception\InvalidArgumentException on incorrect class
     *
     * @return TenantEntity
     */
    private function guardObject($object)
    {
        if (($object instanceof TenantEntity) === false) {
            $msg = sprintf(
                'Object must be an instance of %s, [%s] given',
                'TenantEntity',
                is_object($object) ? get_class($object) : gettype($object)
            );

            throw new Exception\InvalidArgumentException($msg);
        }

        return $object;
    }
    
}//end class