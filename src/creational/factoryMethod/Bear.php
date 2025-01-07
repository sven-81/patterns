<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class Bear implements Present
{
    public function addRecipientsAge(): string
    {
        return 'For toddlers: ' . PHP_EOL;
    }


    public function checkSound(): void
    {
        echo 'Roarrr!' . PHP_EOL;
    }


    public function about(): string
    {
        return 'A cute teddy bear.' . PHP_EOL;
    }
}
