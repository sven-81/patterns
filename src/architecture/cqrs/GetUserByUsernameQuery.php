<?php

declare(strict_types=1);

namespace patterns\architecture\cqrs;

class GetUserByUsernameQuery
{
    public function __construct(private readonly string $username)
    {
    }


    public function getUsername(): string
    {
        return $this->username;
    }
}
