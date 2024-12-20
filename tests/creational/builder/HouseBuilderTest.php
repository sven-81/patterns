<?php

declare(strict_types=1);

namespace patterns\creational\builder;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(HouseBuilder::class)]
class HouseBuilderTest extends TestCase
{
    public function testName(): void
    {
        self::assertTrue(true);
    }
}
