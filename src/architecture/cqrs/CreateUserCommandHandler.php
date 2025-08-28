<?php

declare(strict_types=1);

namespace patterns\architecture\cqrs;

class CreateUserCommandHandler
{
    public function handle(CreateUserCommand $command): void
    {
        echo 'created user: ' . $command->getUser() . PHP_EOL;
    }
}
