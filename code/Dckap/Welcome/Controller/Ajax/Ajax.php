<?php
//http://magento.stackexchange.com/questions/109119/dynamic-create-block-in-magento-2-and-send-as-ajax-call-response
namespace Dckap\Welcome\Controller\Ajax;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Ajax extends \Magento\Framework\App\Action\Action
{
	
	protected $resultPageFactory;
	public function __construct(\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultFactory) {
        parent::__construct($context);
        $this->resultPageFactory = $resultFactory;
    }
	
    public function execute()
    {
        // $this->_view->loadLayout();
        // $this->_view->getLayout()->initMessages();
        // $this->_view->renderLayout();
		//dyamically load template and send response in ajax and passing data.
		$resultPage = $this->resultPageFactory->create();
		 $name = 'DEV';
        $block = $resultPage->getLayout()
				->createBlock('Dckap\Welcome\Block\Hello')
                ->setTemplate('Dckap_Welcome::hello.phtml')
				->setName($name)
                ->toHtml();
        $this->getResponse()->setBody($block);
    }	
	
}