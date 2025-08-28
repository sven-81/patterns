<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class AnotherHandymanElf implements Elf
{
    public function wrap(Present $present): void
    {
        echo 'I am another handyman, never busy and I wrap:' . PHP_EOL;
        echo $present->addRecipientsAge();
        echo $present->about() . PHP_EOL;
    }
}
