<?php

namespace M2\DbSchema\Model\ResourceModel;

class SchemaUser extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('m2test_dbschema_table', 'id');
    }
}
