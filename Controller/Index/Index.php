<?php

namespace DeliPistacna\Greeting\Controller\Index;

use DeliPistacna\Greeting\Helper\Data;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Index implements HttpGetActionInterface
{
    public function __construct(
		protected ResultFactory $resultFactory,
		protected Data $helperData,
    )
    {
    }

    public function execute()
    {
        $greeting = $this->helperData->getGeneralConfig('greeting_string');
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents($greeting);
        return $result;
    }
}
