<?php

declare(strict_types=1);

namespace patterns\architecture\cqrs;

class CreateUserCommand
{
    public function __construct(private readonly string $user, private readonly string $mail)
    {
    }


    public function getUser(): string
    {
        return $this->user;
    }


    public function getMail(): string
    {
        return $this->mail;
    }
}
