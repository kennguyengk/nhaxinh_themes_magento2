<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Testimonial\Model\ResourceModel;

class Testimo extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('pt_testimonial', 'testimo_id');
    }
}
