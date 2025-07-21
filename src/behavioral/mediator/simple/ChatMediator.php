<?php

declare(strict_types=1);

namespace patterns\behavioral\mediator\simple;

class ChatMediator implements Mediator
{
    private array $users = [];


    public function sendMessage(string $message, User $user): void
    {
        /** @var User $storedUser */
        foreach ($this->users as $storedUser) {
            if (!$storedUser->equals($user)) {
                $storedUser->receiveMessage($message);
            }
        }
    }


    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }
}
