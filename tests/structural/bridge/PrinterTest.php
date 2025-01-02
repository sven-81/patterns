<?php

declare(strict_types=1);

namespace patterns\structural\bridge;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(OffsetPrinter::class)]
#[CoversClass(LaserPrinter::class)]
#[CoversClass(CmykLayout::class)]
#[CoversClass(SpotColorLayout::class)]
class PrinterTest extends TestCase
{
    public function testCanPrint(): void
    {
        $cmykLayout = new CmykLayout();
        $spotColorLayout = new SpotColorLayout();

        $offsetPrinter = new OffsetPrinter($cmykLayout);
        $laserPrinter = new LaserPrinter($spotColorLayout);

        $offsetPrinter->get();
        $laserPrinter->get();

        print PHP_EOL;

        $offsetPrinter2 = new OffsetPrinter($spotColorLayout);
        $laserPrinter2 = new LaserPrinter($cmykLayout);

        $offsetPrinter2->get();
        $laserPrinter2->get();

        $laserPrinter2->setImplementation($spotColorLayout);
        $laserPrinter2->get();

        $this->expectOutputString(
            <<<'OUT'
a layout in cmyk printed on offset printer
a layout in neon-green printed on laser printer

a layout in neon-green printed on offset printer
a layout in cmyk printed on laser printer
a layout in neon-green printed on laser printer

OUT
        );
    }
}

