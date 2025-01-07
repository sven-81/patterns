<?php

declare(strict_types=1);

namespace patterns\structural\bridge;

class OffsetPrinter extends Printer
{
    public function get(): void
    {
        echo $this->implementation->render('printed on offset printer' . PHP_EOL);
    }
}
