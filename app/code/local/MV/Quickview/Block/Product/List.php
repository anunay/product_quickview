<?php

class MV_Quickview_Block_Product_List extends Mage_Catalog_Block_Product_List
{
    
    public function _preparePriceRenderer($productType)
    {
        return $this->_getPriceBlock($productType)
            ->setTemplate('quickview/catalog/product/price.phtml')
            ->setUseLinkForAsLowAs($this->_useLinkForAsLowAs);
    }
}
