<?php
namespace Certification\Associate\Controller\Adminhtml\Questions;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
         protected $resultPageFactory = false;   

         public function __construct(
                 Context $context,
                 PageFactory $resultPageFactory
         ) {
                 parent::__construct($context);
                 $this->resultPageFactory = $resultPageFactory;
         } 
         public function execute()
         {
                 $resultPage = $this->resultPageFactory->create();                
                 $resultPage->setActiveMenu('Certification_Associate::associate');
                 $resultPage->getConfig()->getTitle()->prepend(__('Certification Associate'));    

                 return $resultPage;
         }
         protected function _isAllowed()
         {
                 return $this->_authorization->isAllowed('Certification_Core::core');
         }
}