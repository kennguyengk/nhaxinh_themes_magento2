<?php
/**
 * Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

 * @author Ken Nguyen <teogk89@gmail.com>
 */

namespace Plazathemes\Blog\Model\Config\Source;

/**
 * Used in creating options for commetns config value selection
 *
 */
class CommetType implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Disabled')],
            ['value' => 'facebook', 'label' => __('Use Facebook Comments')],
            ['value' => 'disqus', 'label' => __('Use Disqus Comments')],
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach($this->toOptionArray() as $item) {
            $array[$item['value']] = $item['label'];
        }
        return $array;
    }
}
