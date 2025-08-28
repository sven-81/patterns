<?php

declare(strict_types=1);

namespace patterns\creational\builder;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(TinyHouseBuilder::class)]
#[CoversClass(TinyHouse::class)]
class TinyHouseBuilderTest extends TestCase
{
    public function testCanBuildWithBlackDoorsAndFlachdach(): void
    {
        $builder = new TinyHouseBuilder();
        $builder->addWalls(6);

        $tinyHouse = $builder->build();
        self::assertEquals(
            new TinyHouse(
                windows: 4,
                doors: 'black',
                roof: 'flachdach',
                rooms: 2,
                walls: 6,
            ),
            $tinyHouse
        );

        $tinyHouse->about();
        self::expectOutputString(
            'I\'m a TinyHouse with: 6 walls, 4 windows, black doors, flachdach roof, 2 rooms and 0 garages.' . PHP_EOL
        );
    }


    public function testCanBuildWithRedDoorsAndPultdach(): void
    {
        $builder = new TinyHouseBuilder();
        $builder->addDoors('red')
            ->addRoof(2)
            ->addWindows(3);

        $tinyHouse = $builder->build();

        self::assertEquals(
            new TinyHouse(
                windows: 3,
                doors: 'red',
                roof: 'pultdach',
                rooms: 2,
                walls: 5
            ),
            $tinyHouse
        );

        $tinyHouse->about();

        self::expectOutputString(
            'I\'m a TinyHouse with: 5 walls, 3 windows, red doors, pultdach roof, 2 rooms and 0 garages.' . PHP_EOL
        );
    }
}
