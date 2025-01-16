<?php

declare(strict_types=1);

namespace patterns\behavioral\specification;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Order::class)]
#[CoversClass(Customer::class)]
#[CoversClass(AndSpecification::class)]
#[CoversClass(OrSpecification::class)]
#[CoversClass(LoyaltyPointsSpecification::class)]
#[CoversClass(MinimumOrderValueSpecification::class)]
class SpecificationTest extends TestCase
{
    public function testCanUseBusinessRules(): void
    {
        $order = new Order(120);
        $customer = new Customer(600);

        $minOrderValueSpec = new MinimumOrderValueSpecification(100);
        $loyaltyPointsSpec = new LoyaltyPointsSpecification(500);

        $discountEligibilitySpec = new AndSpecification($minOrderValueSpec, $loyaltyPointsSpec);

        if ($discountEligibilitySpec->isSatisfiedBy($order) && $discountEligibilitySpec->isSatisfiedBy($customer)) {
            echo "Der Kunde ist berechtigt, einen Rabatt zu erhalten!";
        } else {
            echo "Der Kunde ist nicht berechtigt, einen Rabatt zu erhalten.";
        }

        $this->expectOutputString('Der Kunde ist nicht berechtigt, einen Rabatt zu erhalten.');
    }
}
