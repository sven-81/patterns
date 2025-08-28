<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter\simple;

class Multiply implements Expression
{
    public function __construct(
        private readonly Expression $multiplier,
        private readonly Expression $multiplicand
    ) {
    }


    public function interpret(): int
    {
        return $this->multiplier->interpret() * $this->multiplicand->interpret();
    }
}
