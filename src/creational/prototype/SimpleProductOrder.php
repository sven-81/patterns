<?php

declare(strict_types=1);

namespace patterns\creational\prototype;

class SimpleProductOrder extends OrderPrototype
{
    protected string $category = 'totally simple product';


    public function __clone()
    {
        print 'Cloned simple product' . PHP_EOL;
    }


    final public function about(): void
    {
        print 'Id: ' . $this->id .
            ', Category: ' . $this->category .
            ', Quantity: ' . $this->quantity . PHP_EOL;
    }
}
