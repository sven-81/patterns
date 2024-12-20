<?php

declare(strict_types=1);

namespace patterns\creational\builder;

class TinyHouse implements House
{
    public function __construct(
        private readonly int $windows,
        private readonly string $doors,
        private readonly string $roof,
        private readonly int $rooms,
        private readonly int $walls = 4,
        private readonly int $garage = 0
    ) {
    }


    public function about(): void
    {
        printf(
            "I'm a TinyHouse with: %d walls, %d windows, %s doors, %s roof, %d rooms and %d garages." . PHP_EOL,
            $this->walls,
            $this->windows,
            $this->doors,
            $this->roof,
            $this->rooms,
            $this->garage,
        );
    }
}
