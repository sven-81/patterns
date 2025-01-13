<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter;

class GreaterThan implements ContextExpression
{
    public function __construct(
        private readonly string $field,
        private readonly float $value
    ) {
    }


    public function interpret(array $context): bool
    {
        return $context[$this->field] > $this->value;
    }
}
