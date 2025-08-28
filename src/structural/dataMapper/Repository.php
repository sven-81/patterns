<?php

declare(strict_types=1);

namespace patterns\structural\dataMapper;

class Repository
{
    public function __construct(private readonly array $data)
    {
    }


    public function find(int $id): ?array
    {
        if (array_key_exists($id, $this->data)) {
            return $this->data[$id];
        }

        return null;
    }
}
