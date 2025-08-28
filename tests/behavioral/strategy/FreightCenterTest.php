<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(AirMail::class)]
#[CoversClass(FreightCenterManager::class)]
#[CoversClass(FreightCenter::class)]
#[CoversClass(ParcelShipping::class)]
#[CoversClass(Plane::class)]
#[CoversClass(Ship::class)]
#[CoversClass(Truck::class)]
class FreightCenterTest extends TestCase
{
    public function testCanRun(): void
    {
        $manager = new FreightCenterManager();
        $freightCenter = new FreightCenter($manager);
        $freightCenter->run();

        $expectedString = <<<'OUT'
I am a plane and I delivered: 
I am an air mail.
Not much weight.
I am a truck and I delivered: 
I am a really heavy
 box for parcel shipping.
really heavy
I am a truck and I delivered: 
I am a really heavy
 box for parcel shipping.
really heavy
I am a plane and I delivered: 
I am an air mail.
Not much weight.
I am a plane and I delivered: 
I am an air mail.
Not much weight.

OUT;
        $this->expectOutputString($expectedString . PHP_EOL . PHP_EOL . $expectedString);
    }
}
