<?php

namespace Domain\Response\Sale;

class AddProductToStoreResponse
{
    private ?string $message;

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }
}