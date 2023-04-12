<?php
namespace adminform\employeemodule\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'adminform\employeemodule\Model\Test',
            'adminform\employeemodule\Model\ResourceModel\Test'
        );
    }
}
