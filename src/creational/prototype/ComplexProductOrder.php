<?php

declare(strict_types=1);

namespace patterns\creational\prototype;

use DateTimeImmutable;

class ComplexProductOrder extends OrderPrototype
{
    protected string $category = 'really complex';

    private DateTimeImmutable $date;
    

    public function __construct(private readonly DateTimeImmutable $clock)
    {
    }


    final public function setQuantity(int $quantity): void
    {
        $this->quantity = 500 + $quantity;
    }


    public function __clone()
    {
        $this->date = $this->clock;
        print 'Cloned complex product order' . PHP_EOL;
    }


    final public function about(): void
    {
        print 'Id: ' . $this->id .
            ', Category: ' . $this->category .
            ', Quantity: ' . $this->quantity .
            ', date: ' . $this->date->format('h:i:s') . PHP_EOL;
    }
}
