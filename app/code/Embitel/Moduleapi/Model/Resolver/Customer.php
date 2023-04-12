<?php 
declare(strict_types = 1);

namespace Embitel\Moduleapi\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Customer implements ResolverInterface{

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        Array $value = null,
        array $args = null
    ) {
        $customer =[
            [
            'firstname' => 'Kushal',
            'Lastname'  => 'prak',
            'email'     => 'Kushalprak@emb.com',
            'mobile'    => '7338679560',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'
            
        ],

        [   'firstname' => 'prak',
            'Lastname'  => 'rush',
            'email'     => 'Kushal@emb.com',
            'mobile'    => '89790098777',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'

    ],

    [
           'firstname' => 'Kushal',
           'Lastname'  => 'prak',
           'email'     => 'prak@emb.com',
           'mobile'    => '9876543211',
           'city'      => 'Bangalore',
           'state'     => 'Karnataka',
           'country'   => 'India'

    ]
    ];

    return [
        'total_count' => count($customer),
        'items' => $customer
    ];
     
    
    }
    }

