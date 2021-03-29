<?php
/*
 * Copyright © Websolute spa. All rights reserved.
 * See LICENSE and/or COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Websolute\Stub\Controller\Product;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;
use Websolute\Stub\Model\StubData\ProductStubData;

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
     * @var ProductStubData
     */
    private $productStubData;

    /**
     * @param JsonFactory $jsonResultFactory
     * @param RequestInterface $request
     * @param ProductStubData $productStubData
     */
    public function __construct(
        JsonFactory $jsonResultFactory,
        RequestInterface $request,
        ProductStubData $productStubData
    ) {
        $this->jsonResultFactory = $jsonResultFactory;
        $this->request = $request;
        $this->productStubData = $productStubData;
    }

    /**
     * @return ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $type = $this->request->getParam('type');
        $qty = (int) $this->request->getParam('qty', 0);

        $data = $this->productStubData->execute($type, $qty);

        $result = $this->jsonResultFactory->create();
        $result->setData($data);
        return $result;
    }
}
