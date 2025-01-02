<?php

declare(strict_types=1);

namespace patterns\structural\adapter;

class Truck implements Driveable, Loadable
{
    public function __construct(private float $cargoWeight = 0.0)
    {
    }


    public function drive(): void
    {
        print 'I am a driving truck.' . PHP_EOL;
    }


    public function stop(): void
    {
        print 'I am a truck and stopped driving.' . PHP_EOL;
    }


    public function loadCargo(float $weight): void
    {
        $this->cargoWeight += $weight;
        print 'I have got a cargo weight of ' . $this->cargoWeight . 'kg.' . PHP_EOL;
    }


    public function unloadCargo(): void
    {
        $this->cargoWeight = 0.0;
        print 'I am an empty truck now.' . PHP_EOL;
    }
}
