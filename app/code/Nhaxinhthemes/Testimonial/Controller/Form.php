<?php 
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Testimonial\Controller;

abstract class Form extends \Magento\Framework\App\Action\Action {
	/**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    protected $resultForwardFactory;

	/**
	 * A factory that knows how to create a "page" result
	 * Requires an instance of controller action in order to impose page type,
	 * which is by convention is determined from the controller action class
	 * @var \Magento\Framework\View\Result\PageFactory
	 */
	 
	/**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);
    }
}
