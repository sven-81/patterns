<?php

declare(strict_types=1);

namespace patterns\behavioral\iterator;

class Cassette
{
    public function __construct(private readonly string $name, private readonly float $price)
    {
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getPrice(): float
    {
        return $this->price;
    }
}
