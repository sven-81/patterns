<?php

declare(strict_types=1);

namespace patterns\behavioral\observer;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(TemperatureLogger::class)]
#[CoversClass(TemperatureDisplay::class)]
#[CoversClass(WeatherStation::class)]
class WeatherStationTest extends TestCase
{
    public function testCanUseWeatherStation(): void
    {
        $weatherStation = new WeatherStation();

        $display = new TemperatureDisplay();
        $logger = new TemperatureLogger();

        $weatherStation->registerObserver($display);
        $weatherStation->registerObserver($logger);

        echo 'Setze Temperatur auf 22°C:' . PHP_EOL;
        $weatherStation->setTemperature(22.0);

        echo 'Setze Temperatur auf 25°C:' . PHP_EOL;
        $weatherStation->setTemperature(25.0);

        $weatherStation->removeObserver($logger);
        echo 'Setze Temperatur auf 18°C (nach Entfernen des Loggers):' . PHP_EOL;
        $weatherStation->setTemperature(18.0);

        $this->expectOutputString(
            <<<'OUT'
Setze Temperatur auf 22°C:
aktuelle temperature: 22
logged temperature: 22
Setze Temperatur auf 25°C:
aktuelle temperature: 25
logged temperature: 25
Setze Temperatur auf 18°C (nach Entfernen des Loggers):
aktuelle temperature: 18

OUT
        );
    }
}
