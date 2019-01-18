<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Brandslider\Block\Adminhtml;

class Brand extends \Magento\Backend\Block\Widget\Grid\Container {
	/**
	 * Constructor
	 *
	 * @return void
	 */
	protected function _construct() {

		$this->_controller = 'adminhtml_brand';
		$this->_blockGroup = 'Plazathemes_Brandslider';
		$this->_headerText = __('Brands');
		$this->_addButtonLabel = __('Add New Brand');
		parent::_construct();
	}
}
