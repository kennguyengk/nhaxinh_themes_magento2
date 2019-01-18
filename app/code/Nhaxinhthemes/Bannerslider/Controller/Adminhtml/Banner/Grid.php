<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Bannerslider\Controller\Adminhtml\Banner;

class Grid extends \Plazathemes\Bannerslider\Controller\Adminhtml\Banner
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
	protected $resultLayoutFactory;
	
	/**
	* @param \Magento\Framework\View\Result\PageFactory        $resultPageFactory    [description]
	 */
	public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory
    ) {
        $this->resultLayoutFactory = $resultLayoutFactory;
        parent::__construct($context, $coreRegistry);
    }
	
    public function execute()
    {
        $resultLayout = $this->resultLayoutFactory->create();
        return $resultLayout;
    }
}
