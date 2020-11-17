<?php

namespace Certification\Frontend\Helper;

use Magento\Framework\App\Helper\AbstractHelper;


class DataHelper extends AbstractHelper
{
       
        public function getQuestionData ()
        {



		$questionBank = array(
				array(
					"question_text" => "Dummy Question - What is the theme.xml?",
					"question_answers" => "Dummy Answers ;Products may be assigned to zero or more categories;Product to category relation is dynamically defined by Catalog Product Rules;Each product belongs to zero or one category; Each product always belongs to one category",
					'question_correct_answer' => "Dummy Answer ;Products may be assigned to zero or more categories",
					'question_image_links'    => ""
				),
				
					);
			shuffle($questionBank);
			
			return $questionBank;
            
        }
      
}