<?php

namespace BitExpert\ForceCustomerLogin\Model;

use Magento\Catalog\Api\Data\ProductInterface;

class TestProductExtension
{
    public function doesPhpStanKnow(ProductInterface $product): void
    {
        $product->getExtensionAttributes()->getFoo();
    }
}