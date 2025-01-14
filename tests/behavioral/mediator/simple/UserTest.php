<?php

declare(strict_types=1);

namespace patterns\behavioral\mediator\simple;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(User::class)]
#[CoversClass(ChatMediator::class)]
class UserTest extends TestCase
{
    public function testCanUseChat(): void
    {
        $mediator = new ChatMediator();

        $kevin = new User('Kevin', $mediator);
        $bob = new User('Bob', $mediator);
        $stuart = new User('Stuart', $mediator);

        $mediator->addUser($kevin);
        $mediator->addUser($bob);
        $mediator->addUser($stuart);

        $kevin->sendMessage('Bello, Bob und Stuart!');
        $bob->sendMessage('Bello, Stuart!');
        $stuart->sendMessage('Bon notti, Kevin und Bob!');

        $this->expectOutputString(
            <<<'OUT'
Kevin is sending message: Bello, Bob und Stuart!
Bob is sending message: Bello, Stuart!
Stuart is sending message: Bon notti, Kevin und Bob!

OUT
        );
    }
}
