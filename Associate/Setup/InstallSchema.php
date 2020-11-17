<?php

namespace Certification\Associate\Setup;
use  Magento\Framework\Setup\SchemaSetupInterface;
use  Magento\Framework\Setup\ModuleContextInterface;
use  Magento\Framework\Setup\InstallSchemaInterface;
use  Magento\Framework\DB\Ddl\Table;
use  Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{

	public function install(SchemaSetupInterface $setup,ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('certification_associate_questions')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('certification_associate_questions')
			)
				->addColumn(
					'question_id',
					Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'Question ID'
				)
				->addColumn(
					'question_text',
					Table::TYPE_TEXT,
					1000,
					['nullable => false'],
					'Question'
				)
				->addColumn(
					'question_answers',
					Table::TYPE_TEXT,
					1000,
					[],
					'Answers'
				)
				->addColumn(
					'question_correct_answer',
					Table::TYPE_TEXT,
					1000,
					[],
					'Correct Answer'
				)
				->addColumn(
					'question_image_links',
					Table::TYPE_TEXT,
					255,
					[],
					'Question Images'
				)
				->addColumn(
					'created_at',
					Table::TYPE_TIMESTAMP,
					null,
					['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
					'Created At'
				)->addColumn(
					'updated_at',
					Table::TYPE_TIMESTAMP,
					null,
					['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
					'Updated At')
				->setComment('Question Table');
			$installer->getConnection()->createTable($table);

			$installer->getConnection()->addIndex(
				$installer->getTable('certification_associate_questions'),
				$setup->getIdxName(
					$installer->getTable('certification_associate_questions'),
					['question_text','question_answers','question_correct_answer','question_image_links'],
					AdapterInterface::INDEX_TYPE_FULLTEXT
				),
				['question_text','question_answers','question_correct_answer','question_image_links'],
					AdapterInterface::INDEX_TYPE_FULLTEXT
			);
		}
		$installer->endSetup();
	}
}
