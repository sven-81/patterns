<?php

declare(strict_types=1);

namespace patterns\structural\dataMapper\simple;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(User::class)]
#[CoversClass(UserMapper::class)]
class UserMapperTest extends TestCase
{
    public function testCanGetAllUsers(): void
    {
        $statementMock = $this->createMock('PDOStatement');
        $userData = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@doe.com'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@doe.com'],
            ['id' => 3, 'name' => 'Somebody Else', 'email' => 'somebody@else.com'],
        ];
        $statementMock->method('fetchAll')
            ->willReturn($userData);

        $pdoMock = $this->createMock('PDO');
        $pdoMock->method('query')
            ->with('SELECT * FROM users')
            ->willReturn($statementMock);

        $userMapper = new UserMapper($pdoMock);
        $users = $userMapper->findAll();

        $expected = [];
        foreach ($userData as $expectedUser) {
            $expected[] = new User($expectedUser['id'], $expectedUser['name'], $expectedUser['email']);
        }
        self::assertEquals($expected, $users);
    }


    public function testCanGetSpecialUser(): void
    {
        $statementMock = $this->createMock('PDOStatement');
        $statementMock->method('bindParam')
            ->willReturn(true);
        $statementMock->method('execute')
            ->willReturn(true);
        $statementMock->method('fetch')
            ->willReturn([
                ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@doe.com'],
            ]);

        $pdoMock = $this->createMock('PDO');
        $pdoMock->method('prepare')
            ->willReturn($statementMock);

        $userMapper = new UserMapper($pdoMock);
        $user = $userMapper->find(2);

        self::assertEquals('Jane Doe', $user->getName());
    }
}
