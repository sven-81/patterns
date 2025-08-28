<?php

declare(strict_types=1);

namespace patterns\structural\serviceLocator;

use RuntimeException;

class ServiceLocator
{
    private static mixed $services = [];


    public static function register(string $serviceName, Service $service): void
    {
        self::$services[$serviceName] = $service;
    }


    public static function getService(string $serviceName)
    {
        if (isset(self::$services[$serviceName])) {
            return self::$services[$serviceName];
        }

        throw new RuntimeException('Service ' . $serviceName . ' not found.' . PHP_EOL);
    }
}
