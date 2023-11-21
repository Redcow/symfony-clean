<?php

namespace Infrastructure\Repository;

use Domain\Entity\Product;
use Domain\Gateway\ProductGateway;

class InMemoProductRepository implements ProductGateway
{

    private array $productList = [];
    public function saveProduct(Product $product): void
    {
        $this->productList[] = $product;
    }
}