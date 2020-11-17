<?php

namespace Certification\Frontend\Helper;

use Magento\Framework\App\Helper\AbstractHelper;


class Helper extends AbstractHelper
{
        public function __construct()
        {
            
        }

        public function explodeData ($data="" ,$delimiter =";")
        {        
            return  isset($data) ? explode($delimiter, $data) : array();
        }
             
        public function formatText($dataText ="", $lookFor = "$/" ,$replaceWith = "$")
        {
            return isset($dataText)? str_replace($lookFor, $replaceWith ,$dataText) : " ";
        }

        public function prepareData($answersArray=array(),$keys=array(),$newLineCharacter= "<br>", $formatStringCharacters){
            $formattedAnswers="";
            $count = 0;
            foreach ($answersArray as $answer) {
                $formattedAnswers = $formattedAnswers . $newLineCharacter . " <b>" . $keys[$count] . "</b>" .$this->formatText($answer,$formatStringCharacters['find'], $formatStringCharacters['replace']);
                $count++;
            }
            return $formattedAnswers;
        }
      
}


