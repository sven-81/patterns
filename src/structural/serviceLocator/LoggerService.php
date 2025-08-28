<?php

declare(strict_types=1);

namespace patterns\structural\serviceLocator;

class LoggerService implements Service
{
    public function log($message): void
    {
        echo 'Log: ' . $message . PHP_EOL;
    }
}
