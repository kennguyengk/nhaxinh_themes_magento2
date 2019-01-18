<?php 
namespace Plazathemes\Newproductslider\Block;
use Magento\Catalog\Model\Resource\Product\Collection;
use Magento\Framework\View\Element\AbstractBlock;
class Newproductslider extends \Magento\Catalog\Block\Product\AbstractProduct 
{
		/**
     * Default value for products count that will be shown
     */
    const DEFAULT_PRODUCTS_COUNT = 10;

    /**
     * Products count
     *
     * @var int
     */
    protected $_productsCount;
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

    /**
     * Catalog product visibility
     *
     * @var \Magento\Catalog\Model\Product\Visibility
     */
    protected $_catalogProductVisibility;

    /**
     * Product collection factory
     *
     * @var \Magento\Catalog\Model\Resource\Product\CollectionFactory
     */
    protected $_productCollectionFactory;
	
	protected $productFactory;

    /**
     * @param Context $context
     * @param \Magento\Catalog\Model\Resource\Product\CollectionFactory $productCollectionFactory
     * @param \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param array $data
     */
		public function __construct(
			\Magento\Catalog\Block\Product\Context $context,
			\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
			\Magento\Catalog\Model\Product\Visibility $catalogProductVisibility,
			\Magento\Framework\App\Http\Context $httpContext,
			  \Magento\Catalog\Model\ProductFactory $productFactory,
			array $data = []
		) {
			$this->_productCollectionFactory = $productCollectionFactory;
			$this->_catalogProductVisibility = $catalogProductVisibility;
			$this->httpContext = $httpContext;
			$this->productFactory = $productFactory;
			parent::__construct(
				$context,
				$data
			);
			$this->_isScopePrivate = true;
		}
		public function _prepareLayout()
		{ 

			return parent::_prepareLayout();
		}
		
		public function getConfig($value=''){
 
		   $config =  $this->_scopeConfig->getValue('newproductslider/new_status/'.$value, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		   return $config; 
		 
		}
			
		public function getNewProduct() {
			
				$todayStartOfDayDate = $this->_localeDate->date()->setTime(0, 0, 0)->format('Y-m-d H:i:s');
				$todayEndOfDayDate = $this->_localeDate->date()->setTime(23, 59, 59)->format('Y-m-d H:i:s');
				$storeId = $this->_storeManager->getStore()->getId();
				/** @var $collection \Magento\Catalog\Model\Resource\Product\Collection */
				$collection = $this->_productCollectionFactory->create();
				$collection->setStoreId($storeId);
				$collection->setVisibility($this->_catalogProductVisibility->getVisibleInCatalogIds());

				$collection = $this->_addProductAttributesAndPrices(
					$collection
				)->addStoreFilter()->addAttributeToFilter(
					'news_from_date',
					[
						'or' => [
							0 => ['date' => true, 'to' => $todayEndOfDayDate],
							1 => ['is' => new \Zend_Db_Expr('not null')],
						]
					],
					'left'
				)->addAttributeToFilter(
					'news_to_date',
					[
						'or' => [
							0 => ['date' => true, 'from' => $todayStartOfDayDate],
							1 => ['is' => new \Zend_Db_Expr('not null')],
						]
					],
					'left'
				)->addAttributeToFilter(
					[
						['attribute' => 'news_from_date', 'is' => new \Zend_Db_Expr('not null')],
						['attribute' => 'news_to_date', 'is' => new \Zend_Db_Expr('not null')],
					]
				)->addAttributeToSort(
					'news_from_date',
					'desc'
				)->setPageSize(
					$this->getProductsCount()
				)->setCurPage(
					1
				);
			 $qty = $this->getConfig('qty');	
			 if($qty<1) $qty = 8;
			 $collection ->setPageSize($qty); 

				return $collection;
			}


}