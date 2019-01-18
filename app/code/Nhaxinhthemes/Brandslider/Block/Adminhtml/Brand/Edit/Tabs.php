<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Brandslider\Block\Adminhtml\Brand\Edit;

/**
 * Admin Locator left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs {
	protected function _construct() {
		parent::_construct();
		$this->setId('brand_tabs');
		$this->setDestElementId('edit_form');
		$this->setTitle(__('Brand Information'));
	}

	protected function _prepareLayout() {
		return parent::_prepareLayout();
	}
}
