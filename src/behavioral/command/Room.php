<?php

declare(strict_types=1);

namespace patterns\behavioral\command;

class Room
{
    public function handleLight(): void
    {
        $light = new Light();
        $remote = new RemoteControl();

        $turnOn = new TurnOnLightCommand($light);
        $turnOff = new TurnOffLightCommand($light);

        $remote->setCommand($turnOn);
        $remote->pushButton();

        $remote->setCommand($turnOff);
        $remote->pushButton();
    }
}
