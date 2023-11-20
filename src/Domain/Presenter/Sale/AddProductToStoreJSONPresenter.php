<?php

namespace Domain\Presenter\Sale;

use Domain\Response\Sale\AddProductToStoreResponse as Response;

class AddProductToStoreJSONPresenter
{
    public Response $response;

    public function __construct() {
        $this->response = new Response();
    }

    public function present(): string
    {
        return json_encode([
            'message' => $this->response->getMessage()
        ]);
    }
}