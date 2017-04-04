<?php
namespace Dckap\Welcome\Block;
class Hello extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
	public function test()
	{
		echo "test section";
	}
}