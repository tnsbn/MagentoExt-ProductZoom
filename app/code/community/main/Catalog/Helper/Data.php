<?php

class Chigusa_Catalog_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function getJsMoreview() {
		Mage::app()->getLayout()->getBlock('head')->addItem('skin_js','js/jquery.dtl.js');
	}

    public function getCssMoreview() {
		Mage::app()->getLayout()->getBlock('head')->addItem('skin_css','css/etalage.css');
	}
}