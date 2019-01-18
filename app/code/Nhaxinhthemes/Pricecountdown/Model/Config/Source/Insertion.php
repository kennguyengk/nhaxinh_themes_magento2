<?php
/**
 * Copyright © 2016 portfolio.ken-nguyen.net. All rights reserved.
 *
 * @author Ken Nguyen <teogk89@gmail.com>
 */

/**
 * Used in creating options for Before|After config value selection
 *
 */
namespace Plazathemes\Pricecountdown\Model\Config\Source;

class Insertion implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'before', 'label' => __('Before')], ['value' => 'after', 'label' => __('After')]];
    }

}