<?php

namespace M2\DbSchema\Model\ResourceModel\SchemaUser;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected function _construct()
    {
        $this->_init('M2\DbSchema\Model\SchemaUser', 'M2\DbSchema\Model\ResourceModel\SchemaUser');
    }

}

