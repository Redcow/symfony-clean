<?php

namespace Domain\UseCase\Sale;

use Domain\Entity\Product;
use Domain\Gateway\ProductGateway;
use Domain\Request\Sale\AddProductToStoreRequest as Request;
use Domain\Response\Sale\AddProductToStoreResponse as Response;

class AddProductToStore
{
    public function __construct(
        private readonly ProductGateway $productGateway
    ) {}

    public function execute(Request $request, Response $response): void
    {
        $product = new Product(
            $request->productName,
            $request->productPrice
        );

        $this->productGateway->saveProduct($product);

        $response->setMessage(
            "Product $product->name has been added"
        );
    }
}