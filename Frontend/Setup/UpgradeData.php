<?php

namespace Certification\Frontend\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Certification\Frontend\Helper\DataHelper;
use Certification\Frontend\Model\QuestionsFactory;

class UpgradeData implements UpgradeDataInterface
{
	protected $_questionsFactory;

	protected $_dataHelper;

	public function __construct(QuestionsFactory $questionsFactory ,DataHelper $dataHelper)
	{
		$this->_questionsFactory = $questionsFactory;
		$this->_dataHelper= $dataHelper;
	}

	public function upgrade(ModuleDataSetupInterface $setup,ModuleContextInterface $context)
	{
		$questions = $this->_dataHelper ->getQuestionData();
        		foreach ($questions as $questionData)
						{
							$question = $this->_questionsFactory->create();
							$question->addData($questionData)->save();
							$question = null;
						}
    }
}