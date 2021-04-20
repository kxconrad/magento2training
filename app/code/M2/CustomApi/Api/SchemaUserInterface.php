<?php

namespace M2\CustomApi\Api;

interface SchemaUserInterface
{


    /**
     * GET DbSchema user details
     * @param int $id
     * @return string
     */

    public function getUserDetails($id);
}
