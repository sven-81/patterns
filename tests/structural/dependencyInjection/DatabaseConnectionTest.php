<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DatabaseConnection::class)]
#[CoversClass(DatabaseConfiguration::class)]
class DatabaseConnectionTest extends TestCase
{
    public function testDependencyInjection(): void
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'user', 'shhh');
        $connection = new DatabaseConnection($config);

        $this->assertSame('user:shhh@localhost:3306', $connection->getDsn());
    }
}
