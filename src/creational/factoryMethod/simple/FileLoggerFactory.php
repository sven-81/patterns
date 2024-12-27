<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod\simple;

class FileLoggerFactory implements LoggerFactory
{
    public function __construct(private readonly string $filePath)
    {
    }


    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
