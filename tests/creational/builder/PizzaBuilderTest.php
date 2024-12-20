<?php

declare(strict_types=1);

namespace patterns\creational\builder;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(PizzaBuilder::class)]
class PizzaBuilderTest extends TestCase
{
    public function testCanBuildSalamiPizza(): void
    {
        $pizzaBuilder = new PizzaBuilder();
        $pizzaBuilder
            ->addCheese('cheddar')
            ->addSauce('tomato')
            ->addSideTopping('mushrooms')
            ->addMainTopping('salami')
            ->addSize('XL');

        $pizza = $pizzaBuilder->build();
        self::assertEquals(
            new Pizza('XL', 'cheddar', 'salami', 'mushrooms', 'tomato'),
            $pizza
        );

        $pizza->deliver();

        self::expectOutputString(
            'I\'m a XL pizza and my ingredients are: cheddar, salami, mushrooms, tomato' . PHP_EOL
        );
    }
}
