<?php

declare(strict_types=1);

namespace patterns\behavioral\mediator\simple;

class User
{
    public function __construct(
        private readonly string $name,
        private readonly ChatMediator $mediator
    ) {
    }


    public function equals(User $storedUser): bool
    {
        if ($storedUser->name === $this->name) {
            return true;
        }

        return false;
    }


    public function receiveMessage(string $message): void
    {
        echo 'Received message: ' . $message . PHP_EOL;
    }


    public function sendMessage(string $message): void
    {
        echo $this->name . ' is sending message: ' . $message . PHP_EOL;
        $this->mediator->sendMessage($message, $this);
    }
}
