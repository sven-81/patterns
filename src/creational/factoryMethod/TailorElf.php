<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class TailorElf implements Elf
{
    public function wrap(Present $present): void
    {
        print 'I am a tailor and I wrap:' . PHP_EOL;
        print $present->addRecipientsAge();
        print $present->about();
        print $present->checkSound() . PHP_EOL;
    }
}
