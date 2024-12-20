<?php

declare(strict_types=1);

namespace patterns\creational\builder;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ConstructionSide::class)]
class ConstructionSideTest extends TestCase
{
    public function testCanRun(): void
    {
        $this->expectOutputString(
            'Build a TinyHouse with a black door' . PHP_EOL .
            'I\'m a TinyHouse with: 6 walls, 5 windows, black doors, pultdach roof, 3 rooms and 0 garages.'
            . PHP_EOL . PHP_EOL .
            'Build a TinyHouse with a red door' . PHP_EOL .
            'I\'m a TinyHouse with: 5 walls, 4 windows, red doors, flachdach roof, 2 rooms and 0 garages.'
            . PHP_EOL . PHP_EOL .
            'Build a Palace with a golden door' . PHP_EOL .
            'I\'m a Palace with: 32 walls, 48 windows, golden doors, türme roof, 28 rooms, 5 garages and 2 pools.' .
            PHP_EOL . PHP_EOL .
            'Build a custom Palace with a silver door' . PHP_EOL .
            'I\'m a Palace with: 32 walls, 48 windows, silver doors, walmdach roof, 28 rooms, 5 garages and 3 pools.'
            . PHP_EOL
        );

        $director = new Director();
        $construction = new ConstructionSide($director);
        $construction->run();
    }
}
