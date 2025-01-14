<?php

declare(strict_types=1);

namespace patterns\behavioral\observer;

class TemperatureDisplay implements Observer
{
    public function update(float $temperature): void
    {
        echo 'aktuelle temperature: ' . $temperature . PHP_EOL;
    }
}
