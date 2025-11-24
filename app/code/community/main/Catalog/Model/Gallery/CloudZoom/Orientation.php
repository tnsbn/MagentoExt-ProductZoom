<?php

class Chigusa_Catalog_Model_Gallery_CloudZoom_Orientation
{

    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'bottom',
                'label' => 'Horizontal - Bottom'
            ), 
            array(
                'value' => 'top',
                'label' => 'Horizontal - Top'
            ), 
            array(
                'value' => 'left',
                'label' => 'Vertical - Left'
            ), 
            array(
                'value' => 'right',
                'label' => 'Vertical - Right'
            )
        );
    }

}
