<?php

declare(strict_types=1);

namespace patterns\structural\dataMapper\simple;

class User
{
    public function __construct(private readonly int $id, private readonly string $name, private readonly string $mail)
    {
    }


    public function getName(): string
    {
        return $this->name;
    }
}
