<?php

declare(strict_types=1);

namespace patterns\creational\builder;

class ConstructionSide
{
    public function __construct(private readonly Director $director)
    {
    }


    public function run(): void
    {
        echo 'Build a TinyHouse with a black door' . PHP_EOL;
        $tinyHouseBuilder = new TinyHouseBuilder();
        $blackDoorTinyHouse = $this->director->buildBlackDoorTinyHouse($tinyHouseBuilder);
        $blackDoorTinyHouse->about();

        echo  PHP_EOL . 'Build a TinyHouse with a red door' . PHP_EOL;
        $tinyHouseBuilder = new TinyHouseBuilder();
        $redDoorTinyHouse = $this->director->buildRedDoorTinyHouse($tinyHouseBuilder);
        $redDoorTinyHouse->about();

        echo PHP_EOL . 'Build a Palace with a golden door' . PHP_EOL;
        $palaceBuilder = new PalaceBuilder();
        $palace = $this->director->buildPalaceWithGoldenDoor($palaceBuilder);
        $palace->about();

        echo PHP_EOL . 'Build a custom Palace with a silver door' . PHP_EOL;
        $palaceBuilder = new PalaceBuilder();
        $customPalace = $palaceBuilder->addDoors('silver')->build();
        $customPalace->about();
    }
}
