<?php
/**
 * Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

 * @author Ken Nguyen <teogk89@gmail.com>
 */
namespace Plazathemes\Blog\Controller\Rss;

/**
 * Blog rss feed view
 */
class Feed extends \Magento\Framework\App\Action\Action
{
    /**
     * View blog rss feed action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->getResponse()
            ->setHeader('Content-type', 'text/xml; charset=UTF-8')
            ->setBody(
                $this->_view->getLayout()->getBlock('blog.rss.feed')->toHtml()
            );
    }

}
