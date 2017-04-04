<?php
namespace DCKAP\Welcome\Model\Resource;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Models extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('tbl_models', 'id');  // friends is name of table
    }
}