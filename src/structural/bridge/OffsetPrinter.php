<?php

declare(strict_types=1);

namespace patterns\structural\bridge;

class OffsetPrinter extends Printer
{
    public function get(): void
    {
        print $this->implementation->render('printed on offset printer' . PHP_EOL);
    }
}
