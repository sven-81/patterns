<?php

declare(strict_types=1);

namespace patterns\structural\fluentInterface;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Sql::class)]
class SqlTest extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $sql = new Sql();
        $sql->select(['id', 'user', 'mail'])
            ->from('users', 'u')
            ->where('mail LIKE \'%.de\'')
            ->order('id DESC')
            ->offset(10);

        self::assertSame(
            "SELECT id, user, mail FROM users AS u " .
            "WHERE mail LIKE '%.de' ORDER BY id DESC LIMIT 1000 OFFSET 10;",
            $sql->asString()
        );
    }
}
