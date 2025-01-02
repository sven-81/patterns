<?php

declare(strict_types=1);

namespace patterns\structural\bridge;

class LaserPrinter extends Printer
{
    public function get(): void
    {
        print $this->implementation->render('printed on laser printer' . PHP_EOL);
    }
}
