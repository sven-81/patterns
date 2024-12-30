<?php

declare(strict_types=1);

namespace patterns\creational\prototype;

abstract class OrderPrototype implements OrderOutput
{
    protected string $id;

    protected string $category;

    protected int $quantity;


    abstract public function __clone();


    final public function getId(): string
    {
        return $this->id;
    }


    final public function setId(string $id): void
    {
        $this->id = $id;
    }


    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
}
