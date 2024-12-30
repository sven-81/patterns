<?php

declare(strict_types=1);

namespace patterns\creational\prototype;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Car::class)]
class CarTest extends TestCase
{
    public function testCanCloneCars(): void
    {
        $carPrototype = new Car('black', 'Reitwagen', 'Daimler', '1885', 'Verbrennungsmotor');

        $car1 = $carPrototype->clone();
        $car2 = $carPrototype->clone();
        $car2->setColor('pink');

        print 'Prototype: ' . $carPrototype->aboutCar();
        print 'Car1: ' . $car1->aboutCar();
        print 'Car2: ' . $car2->aboutCar();

        $this->expectOutputString(
            'Prototype: Color: black, Model: Reitwagen, ' .
            'Brand: Daimler, Year: 1885, Engine: Verbrennungsmotor' . PHP_EOL .
            'Car1: Color: black, Model: Reitwagen, ' .
            'Brand: Daimler, Year: 1885, Engine: Verbrennungsmotor' . PHP_EOL .
            'Car2: Color: pink, Model: Reitwagen, ' .
            'Brand: Daimler, Year: 1885, Engine: Verbrennungsmotor' . PHP_EOL
        );
    }
}
