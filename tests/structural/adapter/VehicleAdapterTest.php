<?php

declare(strict_types=1);

namespace patterns\structural\adapter;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Car::class)]
#[CoversClass(Truck::class)]
#[CoversClass(TruckAdapter::class)]
#[CoversClass(CarAdapter::class)]
class VehicleAdapterTest extends TestCase
{
    public function testManageVehicles(): void
    {
        $car = new Car();
        $truck = new Truck();

        $carAdapter = new CarAdapter($car);
        $truckAdapter = new TruckAdapter($truck);

        $vehicles = [$carAdapter, $truckAdapter];

        foreach ($vehicles as $vehicle) {
            $vehicle->drive();
            $vehicle->stop();
        }

        $truckAdapter->loadCargo(1500);
        $truckAdapter->unloadCargo();

        $this->expectOutputString(
            <<<'OUT'
I am a driving car
I am car stopped driving.
I am a driving truck.
I am a truck and stopped driving.
I have got a cargo weight of 1500kg.
I am an empty truck now.

OUT
        );
    }
}
