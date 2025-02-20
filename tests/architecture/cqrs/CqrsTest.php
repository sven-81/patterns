<?php

declare(strict_types=1);

namespace patterns\architecture\cqrs;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(CreateUserCommand::class)]
#[CoversClass(CreateUserCommandHandler::class)]
#[CoversClass(GetUserByUsernameQuery::class)]
#[CoversClass(GetUserByUsernameQueryHandler::class)]
class CqrsTest extends TestCase
{
    public function testCanRun(): void
    {
        $createCommand = new CreateUserCommand("maxmustermann", "max@example.com");
        $createHandler = new CreateUserCommandHandler();
        $createHandler->handle($createCommand);

        $getQuery = new GetUserByUsernameQuery("maxmustermann");
        $getHandler = new GetUserByUsernameQueryHandler();
        $userInfo = $getHandler->handle($getQuery);

        echo $userInfo;

        $this->expectOutputString(
            'created user: maxmustermann' . PHP_EOL
            . 'User maxmustermann taken from Database with mail: foo@bar.com' . PHP_EOL,
        );
    }
}

