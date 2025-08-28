<?php

declare(strict_types=1);

namespace patterns\behavioral\observer;

class TemperatureLogger implements Observer
{
    public function update(float $temperature): void
    {
        echo 'logged temperature: ' . $temperature . PHP_EOL;
    }
}
