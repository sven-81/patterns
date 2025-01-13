<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter;

interface ContextExpression
{
    public function interpret(array $context): bool;
}
