<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Database::class)]
class DatabaseTest extends TestCase
{
    public function testCanCreateOneInstanceOnly(): void
    {
        $database1 = Database::getInstance();
        $database2 = Database::getInstance();
        $this->assertSame($database1, $database2);
    }
}
