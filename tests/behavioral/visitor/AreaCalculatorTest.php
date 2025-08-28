<?php

declare(strict_types=1);

namespace patterns\behavioral\visitor;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Circle::class)]
#[CoversClass(Rectangle::class)]
#[CoversClass(AreaCalculator::class)]
class AreaCalculatorTest extends TestCase
{
    public static function getShape(): array
    {
        return [
            'rect' => [new Rectangle(2, 3), 6.0],
            'circle' => [new Circle(2.5), 19.634954084936208],
        ];
    }


    #[DataProvider('getShape')]
    public function testCanGetTotalArea(Shape $shape, $expected): void
    {
        $areaCalculator = new AreaCalculator();
        $shape->accept($areaCalculator);

        self::assertSame($expected, $areaCalculator->getTotalArea());
    }
}
