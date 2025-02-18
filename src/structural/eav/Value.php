<?php

declare(strict_types=1);

namespace patterns\structural\eav;

class Value
{
    private array $values = [];


    public function __construct(private readonly int $id, private readonly string $name)
    {
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setValue($attribute, $value): void
    {
        $this->values[$attribute->getName()] = $value;
    }


    public function getValues(): array
    {
        return $this->values;
    }
}
