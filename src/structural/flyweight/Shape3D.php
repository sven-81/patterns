<?php

declare(strict_types=1);

namespace patterns\structural\flyweight;

class Shape3D
{
    public function __construct(
        // "intrinsic" states
        private readonly string $type,
        private readonly string $texture,
    ) {
    }


    public function render(Dimensions $dimensions): void
    {
        echo 'Rendering a ' . $this->texture . ' ' . $this->type . $dimensions->render() . PHP_EOL;
    }
}
