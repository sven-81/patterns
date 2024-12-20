<?php

declare(strict_types=1);

namespace patterns\creational\builder;

class Director
{
    public function buildBlackDoorTinyHouse(TinyHouseBuilder $tinyHouseBuilder): TinyHouse
    {
        $tinyHouseBuilder
            ->addWindows(5)
            ->addRoof(2)
            ->addWalls(6)
            ->addRooms(3);

        return $tinyHouseBuilder->build();
    }


    public function buildRedDoorTinyHouse(TinyHouseBuilder $tinyHouseBuilder): TinyHouse
    {
        $tinyHouseBuilder->addDoors('red');

        return $tinyHouseBuilder->build();
    }


    public function buildPalaceWithGoldenDoor(PalaceBuilder $palaceBuilder): Palace
    {
        return $palaceBuilder
            ->addDoors('golden')
            ->addRoof(5)
            ->addPool(2)
            ->build();
    }
}
