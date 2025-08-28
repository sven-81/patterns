<?php

declare(strict_types=1);

namespace patterns\structural\repository;

class User
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $email
    ) {
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getEmail(): string
    {
        return $this->email;
    }
}
