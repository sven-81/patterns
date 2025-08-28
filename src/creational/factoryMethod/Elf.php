<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

interface Elf
{
    public function wrap(Present $present): void;
}
