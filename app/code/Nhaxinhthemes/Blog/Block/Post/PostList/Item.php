<?php
/**
 * Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

 * @author Ken Nguyen <teogk89@gmail.com>
 */

namespace Plazathemes\Blog\Block\Post\PostList;

/**
 * Post list item
 */
class Item extends \Plazathemes\Blog\Block\Post\AbstractPost
{
	/**
	 * @return
	 */
	public function getMediaFolder() {
		$media_folder = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
		return $media_folder;
	}
}
