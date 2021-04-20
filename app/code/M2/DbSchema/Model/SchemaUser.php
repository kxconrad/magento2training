<?php

namespace M2\DbSchema\Model;

class SchemaUser extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init('M2\DbSchema\Model\ResourceModel\SchemaUser');
    }

}
