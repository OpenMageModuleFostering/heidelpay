<?php
class Mage_Heidelpay_Block_Form_Giropay extends Mage_Heidelpay_Block_Form
{
	protected function _construct()
	{
    parent::_construct();
    $this->setTemplate('heidelpay/form/giropay.phtml');
	}

	/**
	 * Retrieve payment configuration object
	 *
	 * @return Mage_Payment_Model_Config
	 */
	protected function _getConfig()
	{
    return Mage::getSingleton('payment/config');
	}

}
