<?php
namespace Nathan\NewHome\Controller\Index;

class Display extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{   
        $this->_view->loadLayout();
        $this->_view->renderLayout();
	}
}
