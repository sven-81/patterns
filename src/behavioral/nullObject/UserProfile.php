<?php

declare(strict_types=1);

namespace patterns\behavioral\nullObject;

class UserProfile
{
    public function __construct(private readonly User $user)
    {
    }


    public function displayProfile(): void
    {
        echo 'Name: ' . $this->user->getName() . PHP_EOL;
        echo 'Mail: ' . $this->user->getMail() . PHP_EOL;
    }
}
