<?php

declare(strict_types=1);

namespace patterns\structural\serviceLocator;

use Throwable;

class ServiceApp
{
    public function run(): void
    {
        try {
            $serviceLocator = new ServiceLocator();

            $serviceLocator::register('database', new DatabaseService());
            $serviceLocator::register('logger', new LoggerService());

            $databaseService = $serviceLocator::getService('database');
            echo $databaseService->connect() . PHP_EOL;

            $loggerService = $serviceLocator::getService('logger');
            $loggerService->log('some log message');
        } catch (Throwable $throwable) {
            echo 'Error: ' . $throwable->getMessage() . PHP_EOL;
        }
    }
}