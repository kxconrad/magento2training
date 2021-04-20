<?php

namespace M2\CustomApi\Model;

use M2\CustomApi\Api\SchemaUserInterface;
use M2\DbSchema\Model\ResourceModel\SchemaUser\CollectionFactory;

class SchemaUserDetails implements SchemaUserInterface
{
    protected $schemaUserFactory;

    public function __construct(
        CollectionFactory $schemaUserFactory
    )
    {
        $this->schemaUserFactory = $schemaUserFactory;
    }


    /**
     * GET DbSchema user details
     * @param int $id
     * @return string
     */
    public function getUserDetails($id)
    {
        $schemaUserDetails = $this->schemaUserFactory->create()->addFieldToFilter('id', $id);
        return $schemaUserDetails->getData();

    }
}
