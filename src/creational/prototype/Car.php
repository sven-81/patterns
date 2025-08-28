<?php

declare(strict_types=1);

namespace patterns\creational\prototype;

class Car
{
    public function __construct(
        private string $color,
        private readonly string $model,
        private readonly string $brand,
        private readonly string $year,
        private readonly string $engine,
    ) {
    }


    public function clone(): Car|static
    {
        return clone $this;
    }


    public function aboutCar(): string
    {
        return 'Color: ' . $this->color .
            ', Model: ' . $this->model .
            ', Brand: ' . $this->brand .
            ', Year: ' . $this->year .
            ', Engine: ' . $this->engine .
            PHP_EOL;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
