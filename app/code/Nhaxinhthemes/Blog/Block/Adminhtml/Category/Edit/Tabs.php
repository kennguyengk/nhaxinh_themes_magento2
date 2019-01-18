<?php
/**
 * Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

 * @author Ken Nguyen <teogk89@gmail.com>
 */

namespace Plazathemes\Blog\Block\Adminhtml\Category\Edit;

/**
 * Admin blog category edit form tabs
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('category_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Category Information'));
    }
}
