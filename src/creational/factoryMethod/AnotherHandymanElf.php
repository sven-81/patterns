<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class AnotherHandymanElf implements Elf
{
    public function wrap(Present $present): void
    {
        print 'I am another handyman, never busy and I wrap:' . PHP_EOL;
        print $present->addRecipientsAge();
        print $present->about() . PHP_EOL;
    }
}
