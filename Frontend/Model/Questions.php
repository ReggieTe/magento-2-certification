<?php
namespace Certification\Frontend\Model;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Questions extends AbstractModel implements IdentityInterface
{
	const CACHE_TAG = 'certification_frontend_questions';

	protected $_cacheTag = 'certification_frontend_questions';

	protected $_eventPrefix = 'certification_frontend_questions';

	protected function _construct()
	{
		$this->_init('Certification\Frontend\Model\ResourceModel\Questions');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
