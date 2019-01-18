<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Brandslider\Controller\Adminhtml\Brand;

class MassDelete extends \Plazathemes\Brandslider\Controller\Adminhtml\Brand
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $brandIds = $this->getRequest()->getParam('brand');
        if (!is_array($brandIds) || empty($brandIds)) {
            $this->messageManager->addError(__('Please select brand(s).'));
        } else {
            try {
                foreach ($brandIds as $brandId) {
                    $brand =$this->_objectManager->create('Plazathemes\Brandslider\Model\Brand')->load($brandId);
                    $brand->delete();
                }
                $this->messageManager->addSuccess(
                    __('A total of %1 record(s) have been deleted.', count($brandIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/');
    }
}
