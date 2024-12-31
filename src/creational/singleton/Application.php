<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

use LogicException;

class Application
{
    public function run(): void
    {
        Logger::log('Running application');

        $classOneLogger = Logger::getInstance();
        $classTwoLogger = Logger::getInstance();
        if ($classOneLogger === $classTwoLogger) {
            $message = 'Logger is unique';
            Logger::log($message);
            print $message;
        } else {
            throw new LogicException('Loggers are different.');
        }

        Logger::log('Application done');
    }
}
