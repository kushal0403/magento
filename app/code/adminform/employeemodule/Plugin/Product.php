<?php
    
    namespace adminform\employeemodule\Plugin;

    class Product
    {
        public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
            return "Plugin-apple".$result; 
        }
    }
