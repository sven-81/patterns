<?php

declare(strict_types=1);

namespace patterns\creational\builder;

class TinyHouseBuilder implements HouseBuilder
{
    public function __construct(
        private int $walls = 5,
        private int $windows = 4,
        private string $doors = 'black',
        private string $roof = 'flachdach',
        private int $rooms = 2,
        private int $garage = 0
    ) {
    }


    public function addWalls(int $walls): static
    {
        $this->walls = $walls;

        return $this;
    }


    public function addWindows(int $windows): static
    {
        $this->windows = $windows;

        return $this;
    }


    public function addDoors(string $type): static
    {
        $this->doors = $type;

        return $this;
    }


    public function addRoof(int $type): static
    {
        $this->roof = match ($type) {
            1 => 'flachdach',
            2 => 'pultdach',
            #   3 => 'satteldach',
            #    4 => 'walmdach',
            #    5 => 'türme',
        };

        return $this;
    }


    public function addGarage(): static
    {
        $this->garage = 0;

        return $this;
    }


    public function addRooms(int $rooms): static
    {
        $this->rooms = $rooms;

        return $this;
    }


    public function build(): TinyHouse
    {
        return new TinyHouse(
            $this->windows,
            $this->doors,
            $this->roof,
            $this->rooms,
            $this->walls,
            $this->garage
        );
    }
}
