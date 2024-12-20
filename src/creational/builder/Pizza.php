<?php

declare(strict_types=1);

namespace patterns\creational\builder;
class Pizza
{
    public function __construct(
        private readonly string $size,
        private readonly string $cheese,
        private readonly string $mainTopping,
        private readonly string $sideTopping,
        private readonly string $sauce
    ) {
    }


    public function deliver(): void
    {
        printf(
            "I'm a %s pizza and my ingredients are: %s, %s, %s, %s\n",
            $this->size,
            $this->cheese,
            $this->mainTopping,
            $this->sideTopping,
            $this->sauce
        );
    }
}
