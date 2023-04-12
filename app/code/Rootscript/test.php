<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 ini_set('memory_limit', '5G');
 error_reporting(E_ALL);
 

 
use Magento\Framework\App\Bootstrap;
require 'app/bootstrap.php';
$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

// $bootstrap->getObjectManager()->get('\Magento\Framework\App\State')->setAreaCode('frontend');

// $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
// $storeId = $storeManager->getStore()->getId();
// $websiteId = $storeManager->getStore($storeId)->getWebsiteId();
$sku=35;
$product = $objectManager->create('\Magento\Catalog\Model\ProductRepository')->get($sku);


$pro_detail=[
    'id' => $product->getId(),
    'sku' => $product->getSku(),
    'name' => $product->getName(),
    'description' => $product->getDescription()
];

$cfile = fopen('products_info.csv', 'w');
fputcsv($cfile,$pro_detail);
fclose($cfile);
echo "Creation Success";
    
    
//     $_product->setSku('axon123');
//     $_product->setName("Axon");
//     $_product->setShortDescription("This is epic.");
//     $_product->save();
//     echo 'Create success' . $_product->getId() . "\n";
// }

// catch (Exception $e) {
//     echo $e->getMessage()."\n";
// }
