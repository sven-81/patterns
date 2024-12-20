<?php

declare(strict_types=1);

namespace patterns\creational\builder;
interface HouseBuilder
{
    public function addWalls(int $walls): static;


    public function addWindows(int $windows): static;


    public function addDoors(string $type): static;


    public function addRoof(int $type): static;


    public function addGarage(): static;


    public function addRooms(int $rooms): static;


    public function build(): House;
}
