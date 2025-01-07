<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class TailorElf implements Elf
{
    public function wrap(Present $present): void
    {
        echo 'I am a tailor and I wrap:' . PHP_EOL;
        echo $present->addRecipientsAge();
        echo $present->about();
        echo $present->checkSound() . PHP_EOL;
    }
}
