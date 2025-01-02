<?php

declare(strict_types=1);

namespace patterns\structural\adapter;

class CarAdapter implements Driveable
{
    public function __construct(private readonly Car $car)
    {
    }


    public function drive(): void
    {
        $this->car->drive();
    }


    public function stop(): void
    {
        $this->car->stop();
    }
}
