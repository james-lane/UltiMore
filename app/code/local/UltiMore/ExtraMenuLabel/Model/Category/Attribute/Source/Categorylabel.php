<?php

class UltiMore_ExtraMenuLabel_Model_Category_Attribute_Source_CategoryLabel
	extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
	protected $_options;
	
	/**
     * Get list of existing category labels
     */
	public function getAllOptions()
	{
		$h = Mage::helper('extramenulabel');
		
		if (!$this->_options)
		{	
			$this->_options[] =
					array('value' => '', 'label' => " ");
					
			if ($tmp = trim($h->getCfg('category_labels/customlabel1')))
			{
				$this->_options[] =
					array('value' => 'customlabel1', 'label' => $tmp);
			}
			if ($tmp = trim($h->getCfg('category_labels/customlabel2')))
			{
				$this->_options[] =
					array('value' => 'customlabel2', 'label' => $tmp);
			}
			if ($tmp = trim($h->getCfg('category_labels/customlabel3')))
			{
				$this->_options[] =
					array('value' => 'customlabel3', 'label' => $tmp);
			}
        }
        return $this->_options;
    }
}
