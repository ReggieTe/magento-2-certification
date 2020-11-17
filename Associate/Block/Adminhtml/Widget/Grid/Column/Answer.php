<?php

namespace Certification\Associate\Block\Adminhtml\Widget\Grid\Column;

use Magento\Backend\Block\Context;
use Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use Certification\Associate\Helper\Helper;

class Answer extends AbstractRenderer
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
        
        $answersArray = $this->_helper->explodeData($row['question_correct_answer']);  

        if(count($answersArray)>1)
        {
           $formattedAnswers = $this->_helper->prepareData(
                                                        $answersArray,
                                                        array("1 : ","2 : ","3 : ","4 : ","5 : ","6 : ","7 : ","8 : "),
                                                        "<br>",
                                                        array("find" => "$/", "replace" => "$")
                                                        );
        }
        else
        {
            $formattedAnswers = current($answersArray);
        }
             
        return trim($formattedAnswers,"<br>");
    }
}