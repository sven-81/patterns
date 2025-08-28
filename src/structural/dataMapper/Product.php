<?php

declare(strict_types=1);

namespace patterns\structural\dataMapper;

use InvalidArgumentException;

class Product
{
    private function __construct(private readonly string $name, private readonly int $price)
    {
    }


    public static function fromState(array $state): self
    {
        $state = self::ensureKeysExist($state);

        return new self($state['name'], $state['price']);
    }


    private static function ensureKeysExist(array $state): array
    {
        if (empty($state['name']) || !array_key_exists('name', $state)) {
            throw new InvalidArgumentException('Product name is required.');
        }

        if (empty($state['price']) || !array_key_exists('price', $state)) {
            throw new InvalidArgumentException('Product price is required.');
        }

        return $state;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getPrice(): int
    {
        return $this->price;
    }
}
