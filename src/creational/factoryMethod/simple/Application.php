<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod\simple;

class Application
{
    public function run(string $path): void
    {
        $stdoutLoggerFactory = new StdoutLoggerFactory();
        $stdoutLogger = $stdoutLoggerFactory->createLogger();
        $stdoutLogger->log('I am a log message on stdout');

        $fileLoggerFactory = new FileLoggerFactory($path);
        $fileLogger = $fileLoggerFactory->createLogger();
        $fileLogger->log('I am a log message in a file');
    }
}
