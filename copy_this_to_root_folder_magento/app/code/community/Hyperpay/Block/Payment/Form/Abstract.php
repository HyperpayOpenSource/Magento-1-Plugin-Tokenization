<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 *
 * @package     Hyperpay
 * @copyright   Copyright (c) 2014 HYPERPAY
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

abstract class Hyperpay_Block_Payment_Form_Abstract extends Mage_Payment_Block_Form
{
   protected function _construct()
    {
        //$this->setTemplate('hyperpay/logo.phtml');

        parent::_construct();

    }
    /**
     * Retrieve logo html string
     *
     * @return string
     */
    protected function _getDescription()
    {
        return $this->_paymentText;
    }

public function getMethodLabelAfterHtml($method){

        return '<img style="position:reltive;float:right;" src="'. $this->getLogoUrl() .'" width="50" height="50" />';
    }

}
