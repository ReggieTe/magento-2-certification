<?php
namespace Certification\Associate\Model\ResourceModel\Questions;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
	protected $_idFieldName = 'question_id';
	protected $_eventPrefix = 'certification_associate_questions_collection';
	protected $_eventObject = 'question_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Certification\Associate\Model\Questions', 'Certification\Associate\Model\ResourceModel\Questions');
	}

}

