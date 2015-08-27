<?php

class UltiMore_ExtraMenuLabel_Helper_Labels extends Infortis_Ultimo_Helper_Labels
{
	/**
	 * Get product labels (HTML)
	 *
	 * @return string
	 */
	public function getLabels($product)
	{
		$html = '';

		$isCustomLabel1 = false;
		if (Mage::getStoreConfig('ultimo/product_labels/customlabel1'))
		{	
			$isCustomLabel1 = $this->isCustomLabel1($product);
		}
		
		$isCustomLabel2 = false;
		if (Mage::getStoreConfig('ultimo/product_labels/customlabel2'))
		{
			$isCustomLabel1 = $this->isCustomLabel2($product);
		}
		
		$isCustomLabel3 = false;
		if (Mage::getStoreConfig('ultimo/product_labels/customlabel3'))
		{
			$isCustomLabel1 = $this->isCustomLabel3($product);
		}
		
		if ($isCustomLabel1 == true)
		{
			$html .= '<span class="sticker-wrapper top-left"><span class="sticker customlabel1">' . $this->__('Custom Label 1') . '</span></span>';
		}
		
		if ($isCustomLabel2 == true)
		{
			$html .= '<span class="sticker-wrapper top-right"><span class="sticker customlabel2">' . $this->__('Custom Label 2') . '</span></span>';
		}
		
		if ($isCustomLabel3 == true)
		{
			$html .= '<span class="sticker-wrapper top-right"><span class="sticker customlabel3">' . $this->__('Custom Label 3') . '</span></span>';
		}
		
		return $html;
	}
}
