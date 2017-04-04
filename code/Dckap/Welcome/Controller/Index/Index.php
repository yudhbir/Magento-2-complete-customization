<?php
namespace Dckap\Welcome\Controller\Index;
use Magento\Framework\App\Action\Context;
use DCKAP\Welcome\Model\ModelsFactory;
class Index extends \Magento\Framework\App\Action\Action
{
    
		protected $_modelNewsFactory;
		/**
	     * @param Context $context
	     * @param NewsFactory $modelNewsFactory
	     */
	    public function __construct(Context $context,ModelsFactory $modelNewsFactory) 
		{	        
			parent::__construct($context);
	        $this->_modelNewsFactory = $modelNewsFactory;
	    }
	
	public function execute()
    {
		$newsModel = $this->_modelNewsFactory->create();
		$item = $newsModel->load(1);
		echo "<pre>";print_r($item->getData());echo "</pre>";
		$this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}