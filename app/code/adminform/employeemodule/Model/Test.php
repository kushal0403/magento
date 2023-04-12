<?php
namespace adminform\employeemodule\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('adminform\employeemodule\Model\ResourceModel\Test');
    }
}
