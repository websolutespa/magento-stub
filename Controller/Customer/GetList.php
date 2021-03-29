<?php
/*
 * Copyright © Websolute spa. All rights reserved.
 * See LICENSE and/or COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Websolute\Stub\Controller\Customer;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;
use Websolute\Stub\Model\StubData\CustomerStubData;

class GetList implements HttpGetActionInterface
{
    /**
     * @var JsonFactory
     */
    private $jsonResultFactory;

    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var CustomerStubData
     */
    private $customerStubData;

    /**
     * @param JsonFactory $jsonResultFactory
     * @param RequestInterface $request
     * @param CustomerStubData $customerStubData
     */
    public function __construct(
        JsonFactory $jsonResultFactory,
        RequestInterface $request,
        CustomerStubData $customerStubData
    ) {
        $this->jsonResultFactory = $jsonResultFactory;
        $this->request = $request;
        $this->customerStubData = $customerStubData;
    }

    /**
     * @return ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $type = $this->request->getParam('type');

        $data = $this->customerStubData->execute($type);

        $result = $this->jsonResultFactory->create();
        $result->setData($data);
        return $result;
    }
}
