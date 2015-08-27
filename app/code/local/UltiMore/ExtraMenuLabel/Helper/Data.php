<?php

class UltiMore_ExtraMenuLabel_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
	 * Get configuration
	 *
	 * @var string
	 */
	public function getCfg($optionString)
	{
		return Mage::getStoreConfig('ultramegamenu/' . $optionString);
	}

}
