<?php
namespace Certification\Frontend\Block\Adminhtml;
use Magento\Backend\Block\Widget\Grid\Container;

class Questions extends Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_questions';
		$this->_blockGroup = 'Certification_Frontend';
		$this->_headerText = __('Questions');
		parent::_construct();
	}
}
