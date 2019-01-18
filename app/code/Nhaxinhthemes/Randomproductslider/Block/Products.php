<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Randomproductslider\Block;

class Products extends \Magento\Framework\View\Element\Template {

	protected $_scopeConfig;

	/**
	 * @var \Magento\Store\Model\StoreManagerInterface
	 */
	protected $_storeManager;
	
	protected $_categoryFactory;

	/**
	 * [__construct description]
	 * @param \Magento\Framework\View\Element\Template\Context                $context                 [description]
	 * @param \Magento\Framework\Registry                                     $coreRegistry            [description]
	 * @param array                                                           $data                    [description]
	 */
	public function __construct(
		\Magento\Catalog\Block\Product\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility,
        \Magento\Framework\App\Http\Context $httpContext,
		\Magento\Catalog\Block\Product\ListProduct $block,
		\Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
	) {
		$this->_productCollectionFactory = $productCollectionFactory;
        $this->_catalogProductVisibility = $catalogProductVisibility;
        $this->httpContext = $httpContext;
        $this->block = $block;
		$this->_categoryFactory = $categoryFactory;
        parent::__construct(
            $context,
            $data
        );
	}
	
	public function getBlockProduct()
	{
		return $this->block;
	}
	
	public function getProducts(){
		$id = $this->_storeManager->getStore()->getRootCategoryId();
		$_category =  $this->_categoryFactory->create()->load($id);
		$children_category = explode(",", $_category->getChildren());
		$_category =  $this->_categoryFactory->create()->load($children_category[0]);
		
		$fieldorder = 'entity_id';
		$order = 'desc';
		$collection = $this->_productCollectionFactory->create();
		$collection->getSelect()->order('rand()');
		$collection->setVisibility($this->_catalogProductVisibility->getVisibleInCatalogIds());
		$collection->addMinimalPrice()
			->addFinalPrice()
			->addTaxPercents()
			->addTaxPercents()
			->setPageSize($this->getConfig('qty'))
			->addAttributeToSelect('*')->addCategoryFilter($_category)
			->setOrder ($fieldorder,$order);

        return $collection;
   }
   
	public function getConfig($config)
	{
		return $this->_scopeConfig->getValue('randomproductslider/general/'.$config, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	/**
	 * Add elements in layout
	 *
	 * @return
	 */
	protected function _prepareLayout() {
		return parent::_prepareLayout();
	}
}
