<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Bannerslider\Block\Adminhtml;

class Banner extends \Magento\Backend\Block\Widget\Grid\Container {
	/**
	 * Constructor
	 *
	 * @return void
	 */
	protected function _construct() {

		$this->_controller = 'adminhtml_banner';
		$this->_blockGroup = 'Plazathemes_Bannerslider';
		$this->_headerText = __('Banners');
		$this->_addButtonLabel = __('Add New Banner');
		parent::_construct();
	}
}
