<?php
namespace DCKAP\Welcome\Observer;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
 
class customerregistercheck implements ObserverInterface
{
	private $messageManager;

	  public function __construct(\Magento\Framework\Message\ManagerInterface $messageManager)
	   {
		   $this->messageManager = $messageManager;
	   }
	 public function execute(Observer $observer)
	 {
		// get parameters passed in events
		//$cart = $observer->getData('param');
		$this->messageManager->addSuccess( __('This is your success message.') );
		//Perform action
	 }
 
}