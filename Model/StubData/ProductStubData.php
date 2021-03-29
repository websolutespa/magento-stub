<?php
/*
 * Copyright © Websolute spa. All rights reserved.
 * See LICENSE and/or COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Websolute\Stub\Model\StubData;

class ProductStubData
{
    public function execute(string $type, int $qty = null): array
    {
        $data = [];
        switch ($type) {
            case 'info':
                $data[] = [
                    'sku' => 'product-1',
                    'name' => $this->generateRandomString()
                ];
                $data[] = [
                    'sku' => 'product-2',
                    'name' => $this->generateRandomString()
                ];
                $data[] = [
                    'sku' => 'product-3',
                    'name' => $this->generateRandomString()
                ];
                if ($qty) {
                    for ($i = 0; $i < $qty; $i++) {
                        $data[] = [
                            'sku' => $this->generateRandomString(),
                            'name' => $this->generateRandomString()
                        ];
                    }
                }
                break;
            case 'qty':
                $data['product-1'] = $this->generateRandomInt();
                $data['product-2'] = $this->generateRandomInt();
                $data['product-3'] = $this->generateRandomInt();
                if ($qty) {
                    for ($i = 0; $i < $qty; $i++) {
                        $data[$this->generateRandomString()] = $this->generateRandomInt();
                    }
                }
                break;
            case 'price':
                $data['product-1'] = $this->generateRandomFloat();
                $data['product-2'] = $this->generateRandomFloat();
                $data['product-3'] = $this->generateRandomFloat();
                if ($qty) {
                    for ($i = 0; $i < $qty; $i++) {
                        $data[$this->generateRandomString()] = $this->generateRandomFloat();
                    }
                }
                break;
        }
        return $data;
    }

    private function generateRandomString($length = 5)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function generateRandomInt(): int
    {
        return rand(0, 100);
    }

    private function generateRandomFloat(): float
    {
        return (float)rand(0, 100) + (float)(rand(0, 10) / 10);
    }
}
