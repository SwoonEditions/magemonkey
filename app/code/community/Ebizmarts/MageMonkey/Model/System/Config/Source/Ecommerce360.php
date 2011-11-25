<?php

class Ebizmarts_MageMonkey_Model_System_Config_Source_Ecommerce360
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => Mage::helper('monkey')->__('Referred Orders')),
            array('value' => 2, 'label' => Mage::helper('monkey')->__('All Orders')),
            array('value' => 0, 'label' => Mage::helper('monkey')->__('-- Disabled --'))
        );
    }
}