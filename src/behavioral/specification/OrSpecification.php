<?php

declare(strict_types=1);

namespace patterns\behavioral\specification;

class OrSpecification implements Specification
{
    public function __construct(
        private readonly Specification $specification1,
        private readonly Specification $specification2
    ) {
    }


    public function isSatisfiedBy($item): bool
    {
        return $this->specification1->isSatisfiedBy($item) || $this->specification2->isSatisfiedBy($item);
    }
}
