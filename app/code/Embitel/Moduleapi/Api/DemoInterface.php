<?php

namespace Embitel\Moduleapi\Api;

/**
 * Interface for managing Demo API
 * @api
 */

interface DemoInterface
{
    /**
     * Get name
     * 
     * @return string
     */
    public function getProfile1();
    // /**
    //  * Get name
    //  * 
    //  * @return string
    //  */
    // public function getProfile2();
    // /**
    //  * Get name
    //  * 
    //  * @return string
    //  */
    // public function getProfile3();

    /**
     * set data 
     * 
     * @param string $postdata
     * @return array
     */

    public function setCustomerdetails($postdata);
}
