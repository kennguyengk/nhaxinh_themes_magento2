<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Testimonial\Block\Adminhtml;

class Testimo extends \Magento\Backend\Block\Widget\Grid\Container {
	/**
	 * Constructor
	 *
	 * @return void
	 */
	protected function _construct() {

		$this->_controller = 'adminhtml_testimo';
		$this->_blockGroup = 'Plazathemes_Testimonial';
		$this->_headerText = __('Testimonials');
		$this->_addButtonLabel = __('Add New Testimonial');
		parent::_construct();
	}
}
