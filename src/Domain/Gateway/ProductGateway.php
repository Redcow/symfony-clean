<?php

namespace Domain\Gateway;

use Domain\Entity\Product;

interface ProductGateway
{
    public function saveProduct(Product $product): void;
}