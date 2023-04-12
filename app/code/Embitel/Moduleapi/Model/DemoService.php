<?php

namespace Embitel\Moduleapi\Model;
use Magento\Customer\Model\GroupFactory;

class DemoService implements \Embitel\Moduleapi\Api\DemoInterface
{
    protected $_group;
public function __construct(
    GroupFactory $group
){
    $this->_group=$group;
}
    /**
     * Get name
     * 
     * @return string
     */

    public function getProfile1(){
        return [[
            'firstname' => 'kushal',
            'lastname'  => 'prakash',
            'email'     => 'sunny@gamil.com',
            'telephone' =>  '7338480680',
            'city'      =>  'bengaluru',
            'state'     =>  'Karnataka',
            'country'   =>   'India'

            
        ],

        [
            'firstname' => 'harsh',
            'lastname'  => 'nag',
            'email'     => 'harsh@gamil.com',
            'telephone' =>  '7336789680',
            'city'      =>  'Gorakhpur',
            'state'     =>  'U.P',
            'country'   =>   'India'
        ],

        [
            'firstname' => 'Trishant',
            'lastname'  => 'Gaurav',
            'email'     => 'trish@gamil.com',
            'telephone' =>  '7338456789',
            'city'      =>  'patna',
            'state'     =>  'Bihar',
            'country'   =>   'India'
        ]];
    }

    /**
     * set data 
     * 
     * @param string $postdata
     * @return array
     */


    public function setCustomerdetails($postdata){
        try{
            $data=[
                'customer_group_code'=>$postdata['groupName'],
                'tax_class_id'=>3
            ];
            $group = $this->_group->create();
            $group->setData($data);
            $group->save();
            //update customer by $postdata
            return[
                'GroupId' => 1,                
                'GroupName' => "CodeZero"
                // 'Group Id' => 5450,                
                // 'Group Name' => 'Yahoo grp '
            ];
        }catch (\Throwable $th) {
            $th->getMessage();
        }
    }
    // /**
    //  * Get name
    //  * 
    //  * @return string
    //  */

    // public function getProfile2(){
    //     return [[
    //         'firstname' => 'harsh',
    //         'lastname'  => 'nag',
    //         'email'     => 'harsh@gamil.com',
    //         'telephone' =>  '7336789680',
    //         'city'      =>  'Gorakhpur',
    //         'state'     =>  'U.P',
    //         'country'   =>   'India'
    //     ]];
    // }
    // /**
    //  * Get name
    //  * 
    //  * @return string
    //  */

    // public function getProfile3(){
    //     return [[
    //         'firstname' => 'Trishant',
    //         'lastname'  => 'Gaurav',
    //         'email'     => 'trish@gamil.com',
    //         'telephone' =>  '7338456789',
    //         'city'      =>  'patna',
    //         'state'     =>  'Bihar',
    //         'country'   =>   'India'
    //     ]];
    // }
    // /**
    //  * Get name
    //  * 
    //  * @param string[] $postdata
    //  * @return array
    //  */

    //  public function getCustomerdetails($postdata)
    //  {
    //     return [[
    //         'Group Id' => 5450,
    //         'Group name'  => 'Yahhoo grp',
    //     ]];
        // try {
        //     $category = $this->categoryFactory->create();
        //     $category->setData($postdata);
        //     $this->resource->save($category);
        //     return [[
        //         'Group Id' => 6780,
        //         'Group name' => 'Yahoo grp'
        //     ]];
        // } catch (\Exception $ex) {
        //     throw new \Magento\Framework\Webapi\Exception(
        //         new Phrase(
        //             $ex->getMessage()
        //         ),
        //         500,
        //         \Magento\Framework\Webapi\Exception::HTTP_INTERNAL_ERROR,
        //         [ 'success' => false, 'error' => 'Something wrong.']
        //     );
        // }
        // categoryFactory->create();
        }
     

