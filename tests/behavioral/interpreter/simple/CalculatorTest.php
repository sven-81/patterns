<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter\simple;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Add::class)]
#[CoversClass(Multiply::class)]
#[CoversClass(Number::class)]
class CalculatorTest extends TestCase
{
    public function testCanCalculate(): void
    {
        $five = new Number(5);
        $three = new Number(3);
        $two = new Number(2);

        $add = new Add($five, $three);
        $multiply = new Multiply($add, $two);

        $result = $multiply->interpret();
        $this->assertSame(16, $result);
    }
}
