<?php

declare(strict_types=1);

namespace patterns\behavioral\nullObject;

class RealUser implements User
{
    public function __construct(
        private readonly string $name,
        private readonly string $mail
    ) {
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getMail(): string
    {
        return $this->mail;
    }
}
