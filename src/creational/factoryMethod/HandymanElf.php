<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class HandymanElf implements Elf
{
    public function __construct(private bool $isBusy)
    {
    }


    public function wrap(Present $present): void
    {
        $this->isBusy = true;

        echo 'I am a handyman and I wrap:' . PHP_EOL;
        echo $present->addRecipientsAge();
        echo $present->about() . PHP_EOL;
    }


    public function isBusy(): bool
    {
        return $this->isBusy;
    }
}
