<?php

namespace Domain\Entity;

class Product
{
    public function __construct(
       public readonly string $name,
       public readonly int $price
    ) {}
}