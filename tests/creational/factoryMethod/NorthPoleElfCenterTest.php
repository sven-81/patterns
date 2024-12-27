<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(NorthPoleElfCenter::class)]
class NorthPoleElfCenterTest extends TestCase
{
    public function testCanRun(): void
    {
        $northPoleElfCenter = new NorthPoleElfCenter();
        $northPoleElfCenter->run();

        $bearString = 'I am a tailor and I wrap:' . PHP_EOL
            . 'For toddlers: ' . PHP_EOL
            . 'A cute teddy bear.' . PHP_EOL
            . 'Roarrr!' . PHP_EOL . PHP_EOL;

        $laptop1String = 'I am a handyman and I wrap:' . PHP_EOL
            . 'for school kids' . PHP_EOL
            . 'a cool laptop for school kids.' . PHP_EOL . PHP_EOL;

        $laptop2String = 'I am another handyman, never busy and I wrap:' . PHP_EOL
            . 'for school kids' . PHP_EOL
            . 'a cool laptop for school kids.' . PHP_EOL . PHP_EOL;

        $this->expectOutputString(
            $bearString
            . $laptop1String
            . $laptop2String
            . $bearString
            . $bearString
        );
    }
}
