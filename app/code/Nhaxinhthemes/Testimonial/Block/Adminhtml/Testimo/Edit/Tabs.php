<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Testimonial\Block\Adminhtml\Testimo\Edit;

/**
 * Admin Locator left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs {
	protected function _construct() {
		parent::_construct();
		$this->setId('testimo_tabs');
		$this->setDestElementId('edit_form');
		$this->setTitle(__('Testimonial Information'));
	}

	protected function _prepareLayout() {
		return parent::_prepareLayout();
	}
}
