<?php

namespace Embitel\Moduleapi\Cron;

class Test
{

	public function execute()
	{

        $current_date=date("YMd_his");
        $file_name='customer'.$current_date.'.csv';
        $header_info=array(
            'FirstName',
            'LastName',
            'Email',
            'Telephone'
        );
        $header_info=array_combine($header_info,$header_info);
        $data=[];
        $data[] = $header_info;
        $data[] = [
            'FirstName' => 'kushal',
            'LastName' => 'Prakash',
            'Email' => 'sunny123@gmail.com',
            'Telephone' => 7338480670
        ];

        $data[] = [
            'FirstName' => 'pankaj',
            'LastName' => 'kumar',
            'Email' => 'sunny1234@gmail.com',
            'Telephone' => 7338480678
        ];

        $tn = fopen('/var/www/html/magento2/var/export/'.$file_name,'w');
        foreach ($data as $fields){
            fputcsv($tn, $fields);
        }


		// $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
		// $logger = new \Zend\Log\Logger();
		// $logger->addWriter($writer);
		// $logger->info(__METHOD__);

		// return $this;

	}
}