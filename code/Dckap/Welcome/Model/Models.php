<?php
namespace DCKAP\Welcome\Model;
use Magento\Framework\Model\AbstractModel;

class Models extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('DCKAP\Welcome\Model\Resource\Models');
    }
}