<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter\simple;

class Add implements Expression
{
    public function __construct(
        private readonly Expression $firstSummand,
        private readonly Expression $secondSummand,
    ) {
    }


    public function interpret(): int
    {
        return $this->firstSummand->interpret() + $this->secondSummand->interpret();
    }
}
