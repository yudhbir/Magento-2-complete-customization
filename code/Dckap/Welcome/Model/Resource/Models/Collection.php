<?php
namespace DCKAP\Welcome\Model\Resource\Models;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'DCKAP\Welcome\Model\Models',
            'DCKAP\Welcome\Model\Resource\Models'
        );
    }
}