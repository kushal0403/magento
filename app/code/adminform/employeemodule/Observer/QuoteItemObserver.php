<?php
 
namespace adminform\employeemodule\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;

class QuoteItemObserver implements ObserverInterface
{
    
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        try {
            

            $item=$observer->getEvent()->getData('quote_item');
            $item=($item->getParentItem()?$item->getParentItem():$item);
            
            $customPrice=100;
            $item->setCustomPrice($customPrice);
            $item->setOriginalCustomPrice($customPrice);
            $item->getProduct()->setIsSuperMode(true);


        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }

    public function getQuoteItem()
    {
        

    }
}
