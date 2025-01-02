<?php

declare(strict_types=1);

namespace patterns\structural\adapter;

class TruckAdapter implements Driveable, Loadable
{
    public function __construct(private Truck $truck)
    {
    }


    public function drive(): void
    {
        $this->truck->drive();
    }


    public function stop(): void
    {
        $this->truck->stop();
    }


    public function loadCargo(float $weight): void
    {
        $this->truck->loadCargo($weight);
    }


    public function unloadCargo(): void
    {
        $this->truck->unloadCargo();
    }
}
