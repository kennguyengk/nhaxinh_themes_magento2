<?php
/**
 * Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

 * @author Ken Nguyen <teogk89@gmail.com>
 */

namespace Plazathemes\Blog\Block\Sidebar;

/**
 * Blog sidebar categories block
 */
class Search extends  \Magento\Framework\View\Element\Template
{
	use Widget;

	/**
     * @var string
     */
    protected $_widgetKey = 'search';

	/**
	 * Retrieve query
	 * @return string
	 */
	public function getQuery()
	{
		return urldecode($this->getRequest()->getParam('q', ''));
	}

}
