<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\LatestTweet\Block;

class LatestTweet extends \Magento\Framework\View\Element\Template {

	/**
	 * [__construct description]
	 * @param \Magento\Framework\View\Element\Template\Context                $context                 [description]
	 * @param array                                                           $data                    [description]
	 */
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		array $data = []
	) {
		parent::__construct($context, $data);
	}
	
	public function getConfig($config)
	{
		return $this->_scopeConfig->getValue('latesttweet/general/'.$config, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	/**
	 * @return
	 */
	public function getBaselink() {
		$media_folder = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
		$media_folder = str_replace("pub/media/","",$media_folder);;
		return $media_folder;
	}
}
