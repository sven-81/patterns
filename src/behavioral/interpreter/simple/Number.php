<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter\simple;

class Number implements Expression
{
    public function __construct(private readonly int $value)
    {
    }


    public function interpret(): int
    {
        return $this->value;
    }
}
