<?php

namespace Domain\Request\Sale;

class AddProductToStoreRequest
{
    public function __construct(
        public readonly string $productName,
        public readonly int $productPrice
    ) {}
}