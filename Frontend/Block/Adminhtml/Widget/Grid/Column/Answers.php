<?php

namespace Certification\Frontend\Block\Adminhtml\Widget\Grid\Column;

use Magento\Backend\Block\Context;
use Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use Certification\Frontend\Helper\Helper;

class Answers extends AbstractRenderer
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
        $formattedAnswers="";
        $answersArray = $this->_helper->explodeData($row['question_answers']);
        shuffle($answersArray);

        $formattedAnswers = $this->_helper->prepareData(
                                                        $answersArray,
                                                        array("A : ", "B : ", "C : ", "D : ", "E : ", "F : ", "G : ", "H : "),
                                                        "<br>",
                                                        array("find" => "$/", "replace" => "$")
                                                        );
             
        return trim($formattedAnswers,"<br>");
    }
}