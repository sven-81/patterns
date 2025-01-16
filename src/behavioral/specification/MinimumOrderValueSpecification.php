<?php

declare(strict_types=1);

namespace patterns\behavioral\specification;

class MinimumOrderValueSpecification implements Specification
{

    public function __construct(private readonly int $minOrderValue)
    {
    }


    public function isSatisfiedBy($order): bool
    {
        return $this->minOrderValue < $order->getMinimumOrderValue();
    }
}
