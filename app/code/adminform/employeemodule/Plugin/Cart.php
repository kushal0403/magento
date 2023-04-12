<?php
    
    namespace adminform\employeemodule\Plugin;

    class Cart
    {
        public function beforeAddProduct(
            \Magento\Checkout\Model\Cart $subject,
            $productInfo,
            $requestInfo = null
        ) {
            $requestInfo['qty'] = 5; // increasing quantity to 10
            return array($productInfo, $requestInfo);
        }
    }
