<?php

declare(strict_types=1);

namespace patterns\behavioral\command;

class TurnOnLightCommand implements Command
{
    public function __construct(private readonly Light $light)
    {
    }


    public function execute(): void
    {
        $this->light->turnOn();
    }
}
