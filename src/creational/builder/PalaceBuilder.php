<?php

declare(strict_types=1);

namespace patterns\creational\builder;

class PalaceBuilder implements HouseBuilder
{
    public function __construct(
        private int $walls = 32,
        private int $windows = 48,
        private string $doors = 'steel',
        private string $roof = 'walmdach',
        private int $rooms = 28,
        private int $garage = 5,
        private int $pool = 3
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
            3 => 'satteldach',
            4 => 'walmdach',
            5 => 'türme',
        };

        return $this;
    }


    public function addGarage(int $garage): static
    {
        $this->garage = $garage;

        return $this;
    }


    public function addRooms(int $rooms): static
    {
        $this->rooms = $rooms;

        return $this;
    }


    public function addPool(int $pool): static
    {
        $this->pool = $pool;

        return $this;
    }


    public function build(): Palace
    {
        return new Palace(
            $this->windows,
            $this->doors,
            $this->roof,
            $this->rooms,
            $this->walls,
            $this->garage,
            $this->pool
        );
    }
}
