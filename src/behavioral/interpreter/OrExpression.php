<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter;

class OrExpression implements ContextExpression
{
    public function __construct(
        private readonly ContextExpression $left,
        private readonly ContextExpression $right
    ) {
    }


    public function interpret(array $context): bool
    {
        return $this->left->interpret($context) || $this->right->interpret($context);
    }
}
