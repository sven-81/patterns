<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter;

class EqualTo implements ContextExpression
{
    public function __construct(
        private readonly string $field,
        private readonly string $value
    ) {
    }


    public function interpret(array $context): bool
    {
        return $context[$this->field] === $this->value;
    }
}
