<?php

namespace Certification\Associate\Block\Adminhtml\Widget\Grid\Column;

use Magento\Backend\Block\Context;
use Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use Certification\Associate\Helper\Helper;

class Question extends AbstractRenderer
{

    protected $_helper;


    public function __construct
    (
        Context $context,
        Helper $helper,
        array $data = []
    )
    {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    public function render(\Magento\Framework\DataObject $row)
    {              
        return $this->_helper->formatText($row['question_text']);
    }
   

}