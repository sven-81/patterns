<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class Laptop implements Present
{
    public function addRecipientsAge(): string
    {
        return 'for school kids';
    }


    public function about(): string
    {
        return PHP_EOL . 'a cool laptop ' . $this->addRecipientsAge() . '.' . PHP_EOL;
    }
}
