<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Bannerslider\Model\ResourceModel\Value;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Plazathemes\Bannerslider\Model\Value', 'Plazathemes\Bannerslider\Model\ResourceModel\Value');
    }
}
