<?php

declare(strict_types=1);

namespace patterns\behavioral\command;

//Empfänger
class Light
{
    public function turnOn(): void
    {
        echo 'Light is on' . PHP_EOL;
    }


    public function turnOff(): void
    {
        echo 'Light is off' . PHP_EOL;
    }
}
