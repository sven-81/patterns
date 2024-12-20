<?php

declare(strict_types=1);

namespace patterns\creational\builder;

class Palace implements House
{
    public function __construct(
        private readonly int $windows,
        private readonly string $doors,
        private readonly string $roof,
        private readonly int $rooms,
        private readonly int $walls = 4,
        private readonly int $garage = 1,
        private readonly int $pool = 0
    ) {
    }


    public function about(): void
    {
        printf(
            "I'm a Palace with: %d walls, %d windows, %s doors, %s roof, "
            . "%d rooms, %d garages and %d pools." . PHP_EOL,
            $this->walls,
            $this->windows,
            $this->doors,
            $this->roof,
            $this->rooms,
            $this->garage,
            $this->pool,
        );
    }
}
