<?php

declare(strict_types=1);

namespace patterns\behavioral\specification;

class LoyaltyPointsSpecification implements Specification
{
    public function __construct(private readonly int $minLoyaltyPoints)
    {
    }


    public function isSatisfiedBy($customer): bool
    {
        return $this->minLoyaltyPoints < $customer->getLoyalityPoints();
    }
}
