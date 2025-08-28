<?php

declare(strict_types=1);

namespace patterns\behavioral\command;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(RemoteControl::class)]
#[CoversClass(Room::class)]
#[CoversClass(TurnOnLightCommand::class)]
#[CoversClass(TurnOffLightCommand::class)]
#[CoversClass(Light::class)]
class RoomTest extends TestCase
{
    public function testCanHandleLight(): void
    {
        $room = new Room();
        $room->handleLight();

        $this->expectOutputString('Light is on' . PHP_EOL . 'Light is off' . PHP_EOL);
    }
}
