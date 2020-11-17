<?php
namespace Certification\Associate\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;


class Questions extends AbstractDb
{
	
	public function __construct(
		Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('certification_associate_questions', 'question_id');
	}
	
}
