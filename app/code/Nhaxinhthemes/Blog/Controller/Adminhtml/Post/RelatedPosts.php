<?php
/**
 * Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

 * @author Ken Nguyen <teogk89@gmail.com>
 */

namespace Plazathemes\Blog\Controller\Adminhtml\Post;

/**
 * Blog post related posts controller
 */
class RelatedPosts extends \Plazathemes\Blog\Controller\Adminhtml\Post
{
    /**
     * View related posts action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
	public function execute()
    {
        $model = $this->_getModel();
        $this->_getRegistry()->register('current_model', $model);

        $this->_view->loadLayout()
            ->getLayout()
            ->getBlock('blog.post.edit.tab.relatedposts')
            ->setPostsRelated($this->getRequest()->getPost('posts_related', null));
 
        $this->_view->renderLayout();
    }
}
