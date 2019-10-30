<?php

class Hyperpay_Model_Resource_Customerdata extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        $this->_init('hyperpay/customerdata', 'id');
    }
}